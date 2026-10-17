<?php
/**
 * Karan Geta: the workshop board and the shop details, each kept in ONE place.
 *
 * The workshop board (home page and Visit) and the shop details (footer) are synced patterns (reusable `wp_block` posts, Appearance > Editor > Patterns); every page and
 * template holds only a reference, so editing one changes it everywhere.
 *
 * The first copy is created from inc/info/<lang>/<key>.html (the sample content's language, else inc/info/<key>.html in
 * English) when the theme is activated (or the first time a page asks for it), tagged with the `_karan_geta_info`
 * post meta so it is found again in any status and never created twice. A synced pattern the user moved to the trash
 * stays there. Nothing the user wrote is changed.
 *
 * @package karan-geta
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Karan_Geta_Info' ) ) {

	/**
	 * The synced price list.
	 */
	final class Karan_Geta_Info {

		const META = '_karan_geta_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'board'   => __( 'Karan Geta: workshop board', 'karan-geta' ),
				'details' => __( 'Karan Geta: shop details', 'karan-geta' ),
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

		/** The default markup of one shared block (inc/info/<lang>/<key>.html, else inc/info/<key>.html). */
		public static function source( $key ) {
			// The copy in the sample content's language (inc/info/<lang>/<key>.html), else English.
			$file = __DIR__ . '/info/' . karan_geta_lang() . '/' . $key . '.html';
			if ( ! is_readable( $file ) ) {
				$file = __DIR__ . '/info/' . $key . '.html';
			}
			$markup = is_readable( $file ) ? trim( (string) file_get_contents( $file ) ) : ''; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
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
		 * @param string $key board or details.
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
		 * @param string $key board or details.
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Karan_Geta_Info::boot();
}
