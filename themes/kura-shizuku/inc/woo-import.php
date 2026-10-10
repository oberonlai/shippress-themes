<?php
/**
 * Kura Shizuku: sample products for WooCommerce, imported after the shared ShipPress demo import.
 *
 * The shared importer (inc/demo-import.php, identical in every ShipPress theme) creates the pages, posts, media and
 * menu. This file adds what only a store has, from the "productCategories", "productTags" and "products" lists in
 * demo-content.json, and only while WooCommerce is active. Without WooCommerce it does nothing at all.
 *
 * When it runs:
 * - right after every run of the shared importer (activation, the "Import demo content" button,
 *   `wp shippress demo-import`): it hooks the `shippress_demo_last` option the shared importer writes at the end
 *   of a run, while that run still holds the import lock;
 * - on the next wp-admin page load when WooCommerce is activated after the theme;
 * - on request: `wp shippress woo-import`.
 *
 * Same rules as the shared importer: every product it creates is tagged with the `_shippress_demo` meta
 * ("kura-shizuku:product:<slug>"), so a later run finds it again (in any status, the trash included) and never
 * creates a second one. A product the user made with the same slug is left alone. Product categories and tags that
 * already exist with the same slug are used as they are. It never changes or deletes anything that exists.
 *
 * @package kura-shizuku
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kura_Shizuku_Woo_Import' ) ) {

	/**
	 * Sample-product importer for Kura Shizuku.
	 */
	final class Kura_Shizuku_Woo_Import {

		const SLUG   = 'kura-shizuku';
		const OPTION = 'kura_shizuku_woo_demo'; // array( 'imported' => time, 'counts' => array( 'created', 'skipped' ) ).

		/** True while a run is going (the option hook can fire more than once per request). */
		private static $running = false;

		/** Hooks. */
		public static function boot() {
			add_action( 'add_option_shippress_demo_last', array( __CLASS__, 'after_demo_import' ), 10, 0 );
			add_action( 'update_option_shippress_demo_last', array( __CLASS__, 'after_demo_import' ), 10, 0 );
			add_action( 'admin_init', array( __CLASS__, 'catch_up' ) );
			if ( defined( 'WP_CLI' ) && WP_CLI ) {
				WP_CLI::add_command( 'shippress woo-import', array( __CLASS__, 'cli' ) );
			}
		}

		/** Whether this theme is the active one and WooCommerce is loaded. */
		public static function ready() {
			return ( get_template() === self::SLUG || get_stylesheet() === self::SLUG )
				&& class_exists( 'WooCommerce' ) && class_exists( 'WC_Product_Simple' ) && taxonomy_exists( 'product_cat' );
		}

		/** The shared importer just finished a run (it still holds the lock): add the products. */
		public static function after_demo_import() {
			if ( ! self::ready() || self::$running ) {
				return;
			}
			$last = get_option( 'shippress_demo_last' );
			if ( ! is_array( $last ) || empty( $last['theme'] ) || self::SLUG !== $last['theme'] ) {
				return;
			}
			try {
				self::import();
			} catch ( Throwable $e ) {
				update_option( self::OPTION, array( 'error' => $e->getMessage() ), false );
			}
		}

		/** WooCommerce was activated after the theme's demo import: add the products once, in wp-admin. */
		public static function catch_up() {
			if ( ! self::ready() || wp_doing_ajax() || ! current_user_can( 'manage_woocommerce' ) ) {
				return;
			}
			$state = get_option( self::OPTION );
			$demo  = get_option( ShipPress_Demo_Import::option_name() );
			if ( ( is_array( $state ) && ! empty( $state['imported'] ) ) || ! is_array( $demo ) || empty( $demo['imported'] ) ) {
				return;
			}
			if ( ! ShipPress_Demo_Import::lock( 0 ) ) {
				return; // Another import is running; the next page load tries again.
			}
			try {
				self::import();
			} catch ( Throwable $e ) {
				update_option( self::OPTION, array( 'error' => $e->getMessage() ), false );
			} finally {
				ShipPress_Demo_Import::unlock();
			}
		}

		/**
		 * Creates the missing sample products. Safe to repeat.
		 *
		 * @return array Counts: 'created' and 'skipped' (products, categories, tags and images).
		 * @throws RuntimeException When a term, image or product cannot be saved.
		 */
		public static function import() {
			$demo   = ShipPress_Demo_Import::load();
			$counts = array( 'created' => 0, 'skipped' => 0 );
			if ( empty( $demo['products'] ) || ! self::ready() ) {
				return $counts;
			}
			require_once ABSPATH . 'wp-admin/includes/file.php';
			require_once ABSPATH . 'wp-admin/includes/media.php';
			require_once ABSPATH . 'wp-admin/includes/image.php';
			self::$running = true;
			try {
				$bump = function ( $created ) use ( &$counts ) {
					++$counts[ $created ? 'created' : 'skipped' ];
				};
				$author = get_current_user_id();
				if ( ! $author ) {
					$author = ShipPress_Demo_Import::default_author();
				}

				// 1. Product categories (parents first) and tags: reuse any term that already has the slug.
				$terms = array( 'product_cat' => array(), 'product_tag' => array() );
				foreach ( array( 'productCategories' => 'product_cat', 'productTags' => 'product_tag' ) as $key => $tax ) {
					foreach ( isset( $demo[ $key ] ) ? $demo[ $key ] : array() as $t ) {
						$found = get_term_by( 'slug', $t['slug'], $tax );
						$bump( ! $found );
						if ( $found ) {
							$terms[ $tax ][ $t['slug'] ] = (int) $found->term_id;
							continue;
						}
						$args = array( 'slug' => $t['slug'], 'description' => isset( $t['description'] ) ? $t['description'] : '' );
						if ( ! empty( $t['parent'] ) && isset( $terms[ $tax ][ $t['parent'] ] ) ) {
							$args['parent'] = $terms[ $tax ][ $t['parent'] ];
						}
						$r = wp_insert_term( $t['name'], $tax, $args );
						if ( is_wp_error( $r ) ) {
							throw new RuntimeException( $r->get_error_message() );
						}
						$terms[ $tax ][ $t['slug'] ] = (int) $r['term_id'];
					}
				}

				// 2. Products.
				foreach ( $demo['products'] as $i => $p ) {
					if ( self::exists( $p['slug'] ) ) {
						$bump( false );
						continue;
					}
					$product = new WC_Product_Simple();
					$product->set_name( $p['name'] );
					$product->set_slug( $p['slug'] );
					$product->set_status( 'publish' );
					$product->set_catalog_visibility( 'visible' );
					$product->set_menu_order( $i );
					$product->set_description( isset( $p['description'] ) ? $p['description'] : '' );
					$product->set_short_description( isset( $p['short'] ) ? $p['short'] : '' );
					$product->set_regular_price( (string) $p['price'] );
					if ( isset( $p['salePrice'] ) ) {
						$product->set_sale_price( (string) $p['salePrice'] );
					}
					if ( ! empty( $p['sku'] ) && ! wc_get_product_id_by_sku( $p['sku'] ) ) {
						$product->set_sku( $p['sku'] );
					}
					if ( isset( $p['stock'] ) ) {
						$product->set_manage_stock( true );
						$product->set_stock_quantity( (int) $p['stock'] );
						$product->set_stock_status( (int) $p['stock'] > 0 ? 'instock' : 'outofstock' );
					}
					if ( isset( $p['weight'] ) ) {
						$product->set_weight( (string) $p['weight'] );
					}
					$product->set_featured( ! empty( $p['featured'] ) );
					$product->set_category_ids( self::ids( $terms['product_cat'], isset( $p['categories'] ) ? $p['categories'] : array() ) );
					$product->set_tag_ids( self::ids( $terms['product_tag'], isset( $p['tags'] ) ? $p['tags'] : array() ) );
					$images = array();
					foreach ( isset( $p['images'] ) ? $p['images'] : array() as $image ) {
						$id = self::image( pathinfo( $image, PATHINFO_FILENAME ), $author, $bump );
						if ( $id ) {
							$images[] = $id;
						}
					}
					if ( $images ) {
						$product->set_image_id( array_shift( $images ) );
						$product->set_gallery_image_ids( $images );
					}
					$attributes = array();
					foreach ( isset( $p['details'] ) ? $p['details'] : array() as $label => $value ) {
						$attribute = new WC_Product_Attribute();
						$attribute->set_name( $label );
						$attribute->set_options( array( (string) $value ) );
						$attribute->set_position( count( $attributes ) );
						$attribute->set_visible( true );
						$attribute->set_variation( false );
						$attributes[] = $attribute;
					}
					$product->set_attributes( $attributes );
					$product->update_meta_data( ShipPress_Demo_Import::META, self::SLUG . ':product:' . $p['slug'] );
					$id = $product->save();
					if ( ! $id ) {
						throw new RuntimeException( 'Could not save the product ' . $p['name'] . '.' );
					}
					if ( $author ) {
						wp_update_post( array( 'ID' => $id, 'post_author' => $author ) );
					}
					$bump( true );
				}
				update_option( self::OPTION, array( 'imported' => time(), 'counts' => $counts ), false );
			} finally {
				self::$running = false;
			}
			return $counts;
		}

		/**
		 * Whether a product with this slug is already there: one this theme imported (any status, the trash too), or
		 * the user's own (any status but the trash), which is never touched.
		 */
		private static function exists( $slug ) {
			if ( ShipPress_Demo_Import::find( 'product', $slug, 'product' ) ) {
				return true;
			}
			$ids = get_posts(
				array(
					'post_type'        => 'product',
					'name'             => $slug,
					'post_status'      => array( 'publish', 'draft', 'pending', 'private', 'future' ),
					'numberposts'      => 1,
					'fields'           => 'ids',
					'suppress_filters' => true,
				)
			);
			return (bool) $ids;
		}

		/** Term ids for a list of slugs (unknown slugs are skipped). */
		private static function ids( array $map, array $slugs ) {
			$out = array();
			foreach ( $slugs as $slug ) {
				if ( isset( $map[ $slug ] ) ) {
					$out[] = $map[ $slug ];
				}
			}
			return $out;
		}

		/**
		 * Media Library id of one of the theme's demo images: the copy the shared importer made (same tag), else
		 * imported here with that same tag, so neither importer ever adds it twice.
		 */
		private static function image( $name, $author, $bump ) {
			$id = ShipPress_Demo_Import::find( 'media', $name, 'attachment' );
			if ( $id ) {
				return $id;
			}
			$files = glob( ShipPress_Demo_Import::theme_dir() . '/assets/images/demo/' . $name . '.{jpg,jpeg,png,webp}', GLOB_BRACE ) ?: array();
			if ( ! $files ) {
				return 0;
			}
			$tmp = wp_tempnam( basename( $files[0] ) );
			copy( $files[0], $tmp );
			$attachment = array( 'meta_input' => array( ShipPress_Demo_Import::META => self::SLUG . ':media:' . $name ) ) + ( $author ? array( 'post_author' => $author ) : array() );
			$id         = media_handle_sideload( array( 'name' => basename( $files[0] ), 'tmp_name' => $tmp ), 0, ucwords( str_replace( '-', ' ', $name ) ), $attachment );
			if ( is_wp_error( $id ) ) {
				wp_delete_file( $tmp );
				throw new RuntimeException( 'Could not import ' . basename( $files[0] ) . ': ' . $id->get_error_message() );
			}
			$bump( true );
			return (int) $id;
		}

		/**
		 * Adds the theme's sample products (WooCommerce must be active). Safe to run again: only missing products,
		 * categories and tags are added; nothing that exists is changed.
		 *
		 * ## EXAMPLES
		 *
		 *     wp shippress woo-import
		 *
		 * @param array $args       Positional args.
		 * @param array $assoc_args Flags.
		 */
		public static function cli( $args, $assoc_args ) {
			if ( ! self::ready() ) {
				WP_CLI::error( 'WooCommerce is not active (or Kura Shizuku is not the active theme): no products to add.' );
				return;
			}
			if ( ! ShipPress_Demo_Import::lock( 120 ) ) {
				WP_CLI::error( 'Another demo import is still running on this site. Try again in a minute.' );
				return;
			}
			$error = '';
			try {
				$counts = self::import();
			} catch ( Throwable $e ) {
				$error = $e->getMessage();
			} finally {
				ShipPress_Demo_Import::unlock();
			}
			if ( '' !== $error ) {
				WP_CLI::error( $error ); // After unlocking: WP_CLI::error() exits.
				return;
			}
			WP_CLI::line( wp_json_encode( array( 'theme' => self::SLUG ) + $counts ) );
			if ( ! isset( $assoc_args['format'] ) || 'json' !== $assoc_args['format'] ) {
				WP_CLI::success( sprintf( 'Sample products ready: %d created, %d already there.', $counts['created'], $counts['skipped'] ) );
			}
		}
	}

	Kura_Shizuku_Woo_Import::boot();
}
