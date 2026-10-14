<?php
/**
 * Tsuba Millinery: shared atelier details, the sizing guide and the shapes table kept in ONE place.
 *
 * The milliner, atelier address, hours, telephone and email (the atelier card), the sizing guide with how to measure
 * and the head sizes (the sizing guide) and the shapes table with shape, material, brim, season and made-to-order
 * options (the shapes table) appear in several places. Each of them is a synced pattern (a reusable `wp_block` post, listed under Appearance > Editor >
 * Patterns), and every place that shows it holds only a reference to it (<!-- wp:block {"ref":…} /-->). Edit the
 * pattern once and every page that shows it changes together.
 *
 * The first copy of each pattern is created from inc/info/<key>.html when the theme is activated (or, failing that,
 * the first time a page asks for it). Each one is tagged with the `_tsuba_millinery_info` post meta, so it is found again
 * in any status and never created twice; a synced pattern the user moved to the trash is respected (it stays there
 * and renders nothing) until it is deleted for good. Nothing the user wrote is ever changed.
 *
 * Internal keys (inc/info/<key>.html, referenced by the patterns) are kept from the parent design: "foundry" is the
 * atelier card, "care" the sizing guide and "lines" the shapes table.
 *
 * @package tsuba-millinery
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Tsuba_Millinery_Info' ) ) {

	/**
	 * Synced patterns for the atelier details, the sizing guide and the shapes table.
	 */
	final class Tsuba_Millinery_Info {

		const META = '_tsuba_millinery_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'foundry' => __( 'Tsuba Millinery: milliner, atelier address, hours, telephone and email', 'tsuba-millinery' ),
				'care'    => __( 'Tsuba Millinery: sizing guide (how to measure, head sizes)', 'tsuba-millinery' ),
				'lines'   => __( 'Tsuba Millinery: shapes (shape, material, brim, season, made to order)', 'tsuba-millinery' ),
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
		 * (photographs) and href="/…" links are pointed at this site.
		 */
		public static function source( $key ) {
			$file = __DIR__ . '/info/' . $key . '.html';
			if ( ! is_readable( $file ) ) {
				return '';
			}
			$markup = trim( (string) file_get_contents( $file ) );
			$markup = str_replace( '{{theme}}/', trailingslashit( get_theme_file_uri() ), $markup );
			return str_replace( 'href="/', 'href="' . esc_url( home_url( '/' ) ), $markup );
		}

		/**
		 * Post ID of the synced pattern for $key (created on first use), or 0 when it cannot be saved.
		 *
		 * @param string $key Info key (foundry, care or lines).
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
		 * @param string $key Info key (foundry, care or lines).
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Tsuba_Millinery_Info::boot();
}
