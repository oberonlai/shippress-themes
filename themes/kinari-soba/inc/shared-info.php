<?php
/**
 * Kinari Soba: the hours (the noren line, opening days, address, telephone, email), today's note (what is sold out for
 * today) and the menu of four seiro trays, each kept in ONE place.
 *
 * The hours appear in the footer and on the home page, Menu, The mill and Visit; today's note in the footer and on the
 * home page and Menu; the menu on the home page and Menu. Each is a synced
 * pattern (a reusable `wp_block` post, Appearance > Editor > Patterns) and every page and the footer
 * hold only a reference to it, so editing it once changes it everywhere.
 *
 * The first copies are created from inc/info/<key>.html when the theme is activated (or the first time a page asks
 * for them), tagged with the `_kinari_soba_info` post meta so they are found again in any status and never created
 * twice. A synced pattern the user moved to the trash stays there. Nothing the user wrote is changed.
 *
 * @package kinari-soba
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kinari_Soba_Info' ) ) {

	/**
	 * Synced patterns for the hours, today's note and the menu.
	 */
	final class Kinari_Soba_Info {

		const META = '_kinari_soba_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'hours' => __( 'Kinari Soba: hours and address', 'kinari-soba' ),
				'today' => __( 'Kinari Soba: today\'s note (sold out for today)', 'kinari-soba' ),
				'menu'  => __( 'Kinari Soba: the menu (four seiro trays)', 'kinari-soba' ),
			);
		}

		/** Hooks. */
		public static function boot() {
			// Before the demo import (priority 10), so the pages it writes already point at the synced patterns.
			add_action( 'after_switch_theme', array( __CLASS__, 'ensure_all' ), 5 );
		}

		/** Creates any missing synced pattern. */
		public static function ensure_all() {
			foreach ( array_keys( self::blocks() ) as $key ) {
				self::id( $key );
			}
		}

		/**
		 * The default markup of one shared block (inc/info/<key>.html): "{{theme}}/" stands for the theme folder URL
		 * (the tray photographs).
		 */
		public static function source( $key ) {
			$file   = __DIR__ . '/info/' . $key . '.html';
			$markup = is_readable( $file ) ? trim( (string) file_get_contents( $file ) ) : ''; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			$markup = str_replace( '{{theme}}/', trailingslashit( get_theme_file_uri() ), $markup );
			// Site-relative links ("/contact/") point at this site, also when WordPress lives in a subfolder.
			return preg_replace_callback(
				'#href="(/[a-z0-9/_-]*)([\#"])#i',
				function ( $m ) {
					return 'href="' . esc_url( home_url( $m[1] ) ) . $m[2];
				},
				$markup
			);
		}

		/**
		 * Post ID of the synced pattern for $key (created on first use), or 0 when it cannot be saved.
		 *
		 * @param string $key hours, today or menu.
		 * @return int
		 */
		public static function id( $key ) {
			static $cache = array();
			$blocks = self::blocks();
			if ( ! isset( $blocks[ $key ] ) ) {
				return 0;
			}
			if ( isset( $cache[ $key ] ) ) {
				return $cache[ $key ];
			}
			$found = get_posts(
				array(
					'post_type'        => 'wp_block',
					'post_status'      => array( 'publish', 'draft', 'pending', 'private', 'future', 'trash' ),
					'meta_key'         => self::META, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
					'meta_value'       => $key, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
					'orderby'          => 'ID',
					'order'            => 'ASC',
					'numberposts'      => 1,
					'fields'           => 'ids',
					'suppress_filters' => true,
				)
			);
			if ( $found ) {
				$cache[ $key ] = (int) $found[0];
				return $cache[ $key ];
			}
			$markup = self::source( $key );
			if ( '' === $markup || ! post_type_exists( 'wp_block' ) ) {
				return 0;
			}
			$id = wp_insert_post(
				wp_slash(
					array(
						'post_type'    => 'wp_block',
						'post_status'  => 'publish',
						'post_title'   => $blocks[ $key ],
						'post_content' => $markup,
						'meta_input'   => array( self::META => $key ),
					)
				),
				true
			);
			$cache[ $key ] = is_wp_error( $id ) ? 0 : (int) $id;
			return $cache[ $key ];
		}

		/**
		 * Block markup that shows the shared block: a reference to the synced pattern, or (when it cannot be saved,
		 * e.g. a read-only preview) the default markup itself.
		 *
		 * @param string $key hours, today or menu.
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Kinari_Soba_Info::boot();
}
