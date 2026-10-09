<?php
/**
 * ShipPress demo import: turns a freshly activated theme into a ready-to-use website.
 *
 * Shared component. Every ShipPress theme ships an identical copy as inc/demo-import.php (canonical copy:
 * shared/inc/demo-import.php in https://github.com/oberonlai/shippress-themes) and loads it from functions.php:
 *
 *     require_once get_template_directory() . '/inc/demo-import.php';
 *
 * Everything theme-specific comes from the theme's demo-content.json: site title/tagline, pages (block markup;
 * <!-- wp:pattern {"slug":"..."} /--> references are expanded into the pattern's real blocks so the copy is
 * editable in the page editor), categories, tags, posts, navigation and the catalogue screen URLs.
 *
 * What it does, once, on `after_switch_theme` (or from the "Import demo content" button / `wp shippress demo-import`):
 * - imports the raster copies of the theme's illustrations (assets/images/demo/*.jpg|png) into the Media Library;
 * - creates the pages, terms, posts (with featured images) and a navigation menu (wp_navigation post; the header's
 *   navigation block has no links of its own, so WordPress shows this menu);
 * - sets Reading (static front page + posts page) when the site has no real front page yet, pretty permalinks
 *   when they are still "Plain", and the site title/tagline only while they are WordPress defaults.
 * It never edits or deletes existing content. Every item it creates is tagged with the `_shippress_demo` post meta
 * ("<theme>:<kind>:<key>"); items that already exist (also in the trash) are skipped, so running it again only adds
 * what is missing. Existing terms with the same slug are reused as they are.
 *
 * @package shippress
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'ShipPress_Demo_Import' ) ) {

	/**
	 * Demo-content importer for ShipPress themes.
	 */
	final class ShipPress_Demo_Import {

		const VERSION  = 1;
		const META     = '_shippress_demo';
		const ACTION   = 'shippress_demo_import';
		const STATUSES = array( 'publish', 'draft', 'pending', 'private', 'future', 'inherit', 'trash' );

		/** Site titles / taglines WordPress (or its installer) uses when nobody has set one. */
		const DEFAULT_TITLES   = array( '', 'WordPress', 'My WordPress Website', 'My WordPress Site', 'My Blog' );
		const DEFAULT_TAGLINES = array( '', 'Just another WordPress site' );

		/**
		 * Hooks: automatic import on activation, admin fallback button, WP-CLI command.
		 */
		public static function boot() {
			add_action( 'after_switch_theme', array( __CLASS__, 'on_switch' ) );
			add_action( 'admin_notices', array( __CLASS__, 'admin_notice' ) );
			add_action( 'admin_post_' . self::ACTION, array( __CLASS__, 'handle_button' ) );
			if ( defined( 'WP_CLI' ) && WP_CLI ) {
				WP_CLI::add_command( 'shippress demo-import', array( __CLASS__, 'cli' ) );
			}
		}

		/** Theme folder this copy lives in (…/themes/<slug>). */
		public static function theme_dir() {
			return dirname( __DIR__ );
		}

		/** Theme slug (folder name). */
		public static function slug() {
			return basename( self::theme_dir() );
		}

		/** Option holding this theme's import state. */
		public static function option_name() {
			return 'shippress_demo_' . str_replace( '-', '_', self::slug() );
		}

		/** Import state: array( 'version', 'imported' (timestamp), 'counts', 'error' ). */
		public static function state() {
			$s = get_option( self::option_name() );
			return is_array( $s ) ? $s : array();
		}

		/**
		 * after_switch_theme: import once. Later activations do nothing (the button / WP-CLI fill in what is missing).
		 */
		public static function on_switch() {
			if ( get_stylesheet() !== self::slug() && get_template() !== self::slug() ) {
				return;
			}
			$state = self::state();
			if ( ! empty( $state['imported'] ) ) {
				return;
			}
			try {
				self::run();
			} catch ( Throwable $e ) {
				update_option( self::option_name(), array( 'version' => self::VERSION, 'error' => $e->getMessage() ), false );
			}
		}

		/**
		 * Runs the import and records the result.
		 *
		 * @param bool $force_reading Also point Reading at the demo Home/News pages when the site already has a front page.
		 * @return array Counts of created and skipped items.
		 */
		public static function run( $force_reading = false ) {
			$counts = self::import( self::load(), $force_reading );
			update_option( self::option_name(), array( 'version' => self::VERSION, 'imported' => time(), 'counts' => $counts ), false );
			return $counts;
		}

		/** Parsed demo-content.json. */
		public static function load() {
			$file = self::theme_dir() . '/demo-content.json';
			$demo = is_readable( $file ) ? json_decode( (string) file_get_contents( $file ), true ) : null; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			if ( ! is_array( $demo ) || empty( $demo['pages'] ) ) {
				throw new RuntimeException( 'demo-content.json is missing or invalid.' );
			}
			return $demo;
		}

		/** Post id already imported under this key (any status, trash included), or 0. */
		public static function find( $kind, $key, $post_type ) {
			$ids = get_posts(
				array(
					'post_type'        => $post_type,
					'post_status'      => self::STATUSES,
					'meta_key'         => self::META, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_key
					'meta_value'       => self::slug() . ':' . $kind . ':' . $key, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_query_meta_value
					'numberposts'      => 1,
					'fields'           => 'ids',
					'suppress_filters' => true,
				)
			);
			return $ids ? (int) $ids[0] : 0;
		}

		/** Tags a created post. */
		private static function tag( $id, $kind, $key ) {
			update_post_meta( $id, self::META, self::slug() . ':' . $kind . ':' . $key );
		}

		/**
		 * The import itself.
		 *
		 * @param array $demo          Parsed demo-content.json.
		 * @param bool  $force_reading See run().
		 * @return array Counts.
		 */
		public static function import( array $demo, $force_reading = false ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			require_once ABSPATH . 'wp-admin/includes/media.php';
			require_once ABSPATH . 'wp-admin/includes/image.php';
			require_once ABSPATH . 'wp-admin/includes/misc.php';

			$counts = array( 'created' => 0, 'skipped' => 0 );
			// Owner of the new content: whoever runs the import, else the first administrator (WP-CLI, activation by code).
			$author = get_current_user_id();
			if ( ! $author ) {
				$admins = get_users( array( 'role' => 'administrator', 'orderby' => 'ID', 'number' => 1, 'fields' => 'ID' ) );
				$author = $admins ? (int) $admins[0] : 0;
			}
			$bump   = function ( $created ) use ( &$counts ) {
				++$counts[ $created ? 'created' : 'skipped' ];
			};
			// The content comes from the theme's own files (forms, inline styles), so it is stored as written.
			kses_remove_filters();
			// Pretty permalinks (only while still "Plain"), first, so every link below gets its final URL.
			if ( '' === (string) get_option( 'permalink_structure' ) ) {
				global $wp_rewrite;
				$wp_rewrite->set_permalink_structure( '/%postname%/' );
				// Taxonomies and post types only register their URL rules while permalinks are pretty (or in wp-admin).
				foreach ( get_taxonomies( array(), 'objects' ) as $taxonomy ) {
					$taxonomy->add_rewrite_rules();
				}
				foreach ( get_post_types( array(), 'objects' ) as $post_type ) {
					$post_type->add_rewrite_rules();
				}
			}

			try {
				// 1. Media: raster copies of the illustrations, keyed by the SVG they stand for.
				$media = array();
				foreach ( glob( self::theme_dir() . '/assets/images/demo/*' ) ?: array() as $file ) {
					if ( ! preg_match( '/\.(jpe?g|png|webp)$/i', $file ) ) {
						continue;
					}
					$name = pathinfo( $file, PATHINFO_FILENAME );
					$id   = self::find( 'media', $name, 'attachment' );
					$bump( ! $id );
					if ( ! $id ) {
						$tmp = wp_tempnam( basename( $file ) );
						copy( $file, $tmp );
						$id = media_handle_sideload( array( 'name' => basename( $file ), 'tmp_name' => $tmp ), 0, ucwords( str_replace( '-', ' ', $name ) ) );
						if ( is_wp_error( $id ) ) {
							wp_delete_file( $tmp );
							throw new RuntimeException( 'Could not import ' . basename( $file ) . ': ' . $id->get_error_message() );
						}
						self::tag( $id, 'media', $name );
						if ( $author ) {
							wp_update_post( array( 'ID' => $id, 'post_author' => $author ) );
						}
					}
					$media[ $name ] = (int) $id;
				}

				// 2. Terms (reuse any term that already has the slug; never change it).
				$terms = array( 'category' => array(), 'post_tag' => array() );
				foreach ( array( 'categories' => 'category', 'tags' => 'post_tag' ) as $key => $tax ) {
					foreach ( isset( $demo[ $key ] ) ? $demo[ $key ] : array() as $t ) {
						$found = get_term_by( 'slug', $t['slug'], $tax );
						$bump( ! $found );
						if ( $found ) {
							$terms[ $tax ][ $t['slug'] ] = (int) $found->term_id;
							continue;
						}
						$r = wp_insert_term( $t['name'], $tax, array( 'slug' => $t['slug'], 'description' => isset( $t['description'] ) ? $t['description'] : '' ) );
						if ( is_wp_error( $r ) ) {
							throw new RuntimeException( $r->get_error_message() );
						}
						$terms[ $tax ][ $t['slug'] ] = (int) $r['term_id'];
					}
				}

				// 3. Pages, created empty first so links between them can point at their real URLs.
				$pages = array();
				$fresh = array();
				foreach ( $demo['pages'] as $p ) {
					$id = self::find( 'page', $p['slug'], 'page' );
					$bump( ! $id );
					if ( ! $id ) {
						$id = wp_insert_post(
							array(
								'post_type'   => 'page',
								'post_status' => 'publish',
								'post_author' => $author,
								'post_title'  => $p['title'],
								'post_name'   => $p['slug'],
								'post_parent' => ( isset( $p['parent'] ) && isset( $pages[ $p['parent'] ] ) ) ? $pages[ $p['parent'] ] : 0,
								'menu_order'  => count( $pages ),
							),
							true
						);
						if ( is_wp_error( $id ) ) {
							throw new RuntimeException( $id->get_error_message() );
						}
						self::tag( $id, 'page', $p['slug'] );
						if ( ! empty( $p['template'] ) ) {
							update_post_meta( $id, '_wp_page_template', $p['template'] );
						}
						$fresh[ $p['slug'] ] = true;
					}
					$pages[ $p['slug'] ] = (int) $id;
				}

				// 4. Posts.
				$posts = array();
				foreach ( isset( $demo['posts'] ) ? $demo['posts'] : array() as $p ) {
					$id = self::find( 'post', $p['slug'], 'post' );
					$bump( ! $id );
					if ( ! $id ) {
						$id = wp_insert_post(
							array(
								'post_type'    => 'post',
								'post_status'  => 'publish',
								'post_author'  => $author,
								'post_title'   => $p['title'],
								'post_name'    => $p['slug'],
								'post_date'    => $p['date'] . ' 09:00:00',
								'post_excerpt' => $p['excerpt'],
							),
							true
						);
						if ( is_wp_error( $id ) ) {
							throw new RuntimeException( $id->get_error_message() );
						}
						self::tag( $id, 'post', $p['slug'] );
						$cats = array();
						foreach ( isset( $p['categories'] ) ? $p['categories'] : array() as $s ) {
							if ( isset( $terms['category'][ $s ] ) ) {
								$cats[] = $terms['category'][ $s ];
							}
						}
						$tags = array();
						foreach ( isset( $p['tags'] ) ? $p['tags'] : array() as $s ) {
							if ( isset( $terms['post_tag'][ $s ] ) ) {
								$tags[] = $terms['post_tag'][ $s ];
							}
						}
						wp_set_post_terms( $id, $cats, 'category' );
						wp_set_post_terms( $id, $tags, 'post_tag' );
						$img = isset( $p['image'] ) ? pathinfo( $p['image'], PATHINFO_FILENAME ) : '';
						if ( $img && isset( $media[ $img ] ) ) {
							set_post_thumbnail( $id, $media[ $img ] );
						}
						$posts[ $p['slug'] ] = array( (int) $id, $p );
					}
				}

				// 5. Content, now that every URL is known. Only for items created in this run.
				$links = self::link_map( $demo, $pages, $terms );
				foreach ( $demo['pages'] as $p ) {
					if ( isset( $fresh[ $p['slug'] ] ) && ! empty( $p['content'] ) ) {
						wp_update_post( array( 'ID' => $pages[ $p['slug'] ], 'post_content' => wp_slash( self::content( $p['content'], $media, $links ) ) ) );
					}
				}
				foreach ( $posts as $item ) {
					list( $id, $p ) = $item;
					$body = isset( $p['content'] ) ? $p['content'] : "<!-- wp:paragraph -->\n<p>" . esc_html( $p['excerpt'] ) . "</p>\n<!-- /wp:paragraph -->";
					wp_update_post( array( 'ID' => $id, 'post_content' => wp_slash( self::content( $body, $media, $links ) ) ) );
				}

				// 6. Navigation menu (the header's navigation block falls back to the newest menu).
				if ( ! empty( $demo['navigation']['items'] ) ) {
					$id = self::find( 'navigation', 'primary', 'wp_navigation' );
					$bump( ! $id );
					if ( ! $id ) {
						$id = wp_insert_post(
							array(
								'post_type'    => 'wp_navigation',
								'post_status'  => 'publish',
								'post_author'  => $author,
								'post_title'   => isset( $demo['navigation']['title'] ) ? $demo['navigation']['title'] : 'Main menu',
								'post_content' => wp_slash( self::navigation_markup( $demo['navigation']['items'], $pages, $terms ) ),
							),
							true
						);
						if ( is_wp_error( $id ) ) {
							throw new RuntimeException( $id->get_error_message() );
						}
						self::tag( $id, 'navigation', 'primary' );
					}
				}

				// 7. Settings that only change while they are still unset / defaults.
				self::settings( $demo, $pages, $force_reading );
			} finally {
				kses_init();
			}
			return $counts;
		}

		/** Reading, permalinks, title and tagline. */
		private static function settings( array $demo, array $pages, $force_reading ) {
			$front = 0;
			$blog  = 0;
			foreach ( $demo['pages'] as $p ) {
				if ( isset( $p['role'] ) && 'front' === $p['role'] ) {
					$front = $pages[ $p['slug'] ];
				}
				if ( isset( $p['role'] ) && 'posts' === $p['role'] ) {
					$blog = $pages[ $p['slug'] ];
				}
			}
			$current = (int) get_option( 'page_on_front' );
			$has_front = 'page' === get_option( 'show_on_front' ) && $current && $current !== $front
				&& get_post_status( $current ) === 'publish' && '' !== trim( (string) get_post_field( 'post_content', $current ) );
			if ( $front && ( $force_reading || ! $has_front ) && get_post_status( $front ) === 'publish' ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $front );
			}
			$current_blog = (int) get_option( 'page_for_posts' );
			if ( $blog && ( $force_reading || ! $current_blog || get_post_status( $current_blog ) !== 'publish' ) && get_post_status( $blog ) === 'publish' ) {
				update_option( 'page_for_posts', $blog );
			}
			flush_rewrite_rules();
			if ( ! empty( $demo['site']['title'] ) && in_array( trim( (string) get_option( 'blogname' ) ), self::DEFAULT_TITLES, true ) ) {
				update_option( 'blogname', $demo['site']['title'] );
			}
			if ( isset( $demo['site']['tagline'] ) && in_array( trim( (string) get_option( 'blogdescription' ) ), self::DEFAULT_TAGLINES, true ) ) {
				update_option( 'blogdescription', $demo['site']['tagline'] );
			}
		}

		/** Site-relative paths used in the theme's markup ("/about/") → real URLs on this site. */
		private static function link_map( array $demo, array $pages, array $terms ) {
			$map = array();
			foreach ( $demo['pages'] as $p ) {
				$path = '/' . ( isset( $p['parent'] ) ? $p['parent'] . '/' : '' ) . $p['slug'] . '/';
				$map[ $path ] = ( isset( $p['role'] ) && 'front' === $p['role'] ) ? home_url( '/' ) : get_permalink( $pages[ $p['slug'] ] );
			}
			foreach ( array( 'category' => 'category', 'post_tag' => 'tag' ) as $tax => $base ) {
				foreach ( $terms[ $tax ] as $slug => $id ) {
					$link = get_term_link( $id, $tax );
					if ( ! is_wp_error( $link ) ) {
						$map[ '/' . $base . '/' . $slug . '/' ] = $link;
					}
				}
			}
			foreach ( isset( $demo['posts'] ) ? $demo['posts'] : array() as $p ) {
				$id = self::find( 'post', $p['slug'], 'post' );
				if ( $id ) {
					$map[ '/' . $p['slug'] . '/' ] = get_permalink( $id );
				}
			}
			foreach ( isset( $demo['links'] ) ? $demo['links'] : array() as $from => $to ) {
				if ( isset( $map[ $to ] ) ) {
					$map[ $from ] = $map[ $to ];
				}
			}
			return $map;
		}

		/**
		 * Page/post markup ready to store: patterns expanded, illustrations swapped for Media Library images,
		 * site-relative links pointed at the real URLs.
		 */
		public static function content( $markup, array $media, array $links ) {
			$html = self::expand_patterns( (string) $markup );
			$uri  = get_theme_file_uri( 'assets/images/' );
			$html = str_replace( '{{theme}}/assets/images/', $uri, $html );
			$html = preg_replace_callback(
				'#' . preg_quote( $uri, '#' ) . '([a-z0-9-]+)\.svg#i',
				function ( $m ) use ( $media ) {
					return isset( $media[ $m[1] ] ) ? (string) wp_get_attachment_url( $media[ $m[1] ] ) : $m[0];
				},
				$html
			);
			return preg_replace_callback(
				'#(href="|"url":")(/[a-z0-9/_-]*)(["\#?])#i',
				function ( $m ) use ( $links ) {
					$path = '/' === substr( $m[2], -1 ) ? $m[2] : $m[2] . '/';
					if ( isset( $links[ $path ] ) ) {
						return $m[1] . $links[ $path ] . $m[3];
					}
					return $m[1] . home_url( $m[2] ) . $m[3];
				},
				$html
			);
		}

		/** Replaces <!-- wp:pattern {"slug":"x"} /--> with that pattern file's blocks (recursively). */
		public static function expand_patterns( $markup, $depth = 0 ) {
			if ( $depth > 5 ) {
				return $markup;
			}
			$files = self::pattern_files();
			return preg_replace_callback(
				'#<!--\s+wp:pattern\s+(\{.*?\})\s+/-->#s',
				function ( $m ) use ( $files, $depth ) {
					$attrs = json_decode( $m[1], true );
					$slug  = is_array( $attrs ) && isset( $attrs['slug'] ) ? $attrs['slug'] : '';
					if ( ! isset( $files[ $slug ] ) ) {
						return $m[0];
					}
					ob_start();
					include $files[ $slug ];
					return trim( self::expand_patterns( (string) ob_get_clean(), $depth + 1 ) );
				},
				$markup
			);
		}

		/** Pattern slug → file, from the "Slug:" header of patterns/*.php. */
		private static function pattern_files() {
			static $files = null;
			if ( null === $files ) {
				$files = array();
				foreach ( glob( self::theme_dir() . '/patterns/*.php' ) ?: array() as $file ) {
					$data = get_file_data( $file, array( 'slug' => 'Slug' ) );
					if ( $data['slug'] ) {
						$files[ $data['slug'] ] = $file;
					}
				}
			}
			return $files;
		}

		/** Inner blocks of the wp_navigation post. */
		private static function navigation_markup( array $items, array $pages, array $terms ) {
			$out = array();
			foreach ( $items as $item ) {
				$attrs = array( 'label' => $item['label'] );
				if ( isset( $item['page'] ) && isset( $pages[ $item['page'] ] ) ) {
					$attrs += array( 'type' => 'page', 'id' => $pages[ $item['page'] ], 'url' => get_permalink( $pages[ $item['page'] ] ), 'kind' => 'post-type' );
				} elseif ( isset( $item['category'] ) && isset( $terms['category'][ $item['category'] ] ) ) {
					$id     = $terms['category'][ $item['category'] ];
					$attrs += array( 'type' => 'category', 'id' => $id, 'url' => get_term_link( $id, 'category' ), 'kind' => 'taxonomy' );
				} elseif ( isset( $item['url'] ) ) {
					$attrs += array( 'url' => 0 === strpos( $item['url'], '/' ) ? home_url( $item['url'] ) : $item['url'], 'kind' => 'custom' );
				} else {
					continue;
				}
				$out[] = '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' /-->';
			}
			return implode( "\n", $out );
		}

		/**
		 * Fallback in wp-admin: a notice with an "Import demo content" button while nothing has been imported
		 * (or the automatic import failed), and a one-time result message.
		 */
		public static function admin_notice() {
			if ( ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'publish_pages' ) ) {
				return;
			}
			$result = get_transient( self::ACTION . '_result' );
			if ( $result ) {
				delete_transient( self::ACTION . '_result' );
				$ok = 'ok' === $result['status'];
				printf(
					'<div class="notice notice-%1$s is-dismissible"><p>%2$s</p></div>',
					$ok ? 'success' : 'error',
					esc_html( $ok ? __( 'Demo content imported. Your pages are under Pages: open one and edit the text.', 'default' ) : $result['message'] )
				);
			}
			$state = self::state();
			if ( ! empty( $state['imported'] ) || get_stylesheet() !== self::slug() ) {
				return;
			}
			$theme = wp_get_theme();
			echo '<div class="notice notice-info"><p>';
			echo esc_html( sprintf( /* translators: %s: theme name */ __( '%s can set up its pages, sample posts, images and menu for you, so you only need to change the text. Nothing you already have is changed.', 'default' ), $theme->get( 'Name' ) ) );
			if ( ! empty( $state['error'] ) ) {
				echo ' ' . esc_html( sprintf( /* translators: %s: error */ __( 'The automatic setup did not finish: %s', 'default' ), $state['error'] ) );
			}
			echo '</p><form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '"><p>';
			echo '<input type="hidden" name="action" value="' . esc_attr( self::ACTION ) . '">';
			wp_nonce_field( self::ACTION );
			submit_button( __( 'Import demo content', 'default' ), 'primary', 'submit', false );
			echo '</p></form></div>';
		}

		/** admin-post.php handler for the button (nonce + capability checked). */
		public static function handle_button() {
			if ( ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'publish_pages' ) ) {
				wp_die( esc_html__( 'Sorry, you are not allowed to do that.', 'default' ), 403 );
			}
			check_admin_referer( self::ACTION );
			try {
				self::run();
				set_transient( self::ACTION . '_result', array( 'status' => 'ok' ), 300 );
			} catch ( Throwable $e ) {
				update_option( self::option_name(), array( 'version' => self::VERSION, 'error' => $e->getMessage() ), false );
				set_transient( self::ACTION . '_result', array( 'status' => 'error', 'message' => $e->getMessage() ), 300 );
			}
			wp_safe_redirect( admin_url( 'edit.php?post_type=page' ) );
			exit;
		}

		/**
		 * Imports the active theme's demo content (pages, posts, images, menu). Safe to run again: only missing items are added.
		 *
		 * ## OPTIONS
		 *
		 * [--reading]
		 * : Also make the demo Home and News pages the front page and posts page, even if the site already has a front page.
		 *
		 * ## EXAMPLES
		 *
		 *     wp shippress demo-import
		 *     wp shippress demo-import --reading
		 *
		 * @param array $args       Positional args.
		 * @param array $assoc_args Flags.
		 */
		public static function cli( $args, $assoc_args ) {
			try {
				$counts = self::run( ! empty( $assoc_args['reading'] ) );
			} catch ( Throwable $e ) {
				WP_CLI::error( $e->getMessage() );
				return;
			}
			WP_CLI::line( wp_json_encode( array( 'theme' => self::slug() ) + $counts ) );
			WP_CLI::success( sprintf( 'Demo content ready: %d created, %d already there.', $counts['created'], $counts['skipped'] ) );
		}
	}

	ShipPress_Demo_Import::boot();
}
