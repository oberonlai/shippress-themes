<?php
/**
 * Kiroku Studio: the studio details (address, phone, email, studio hours and social links) kept in ONE place.
 *
 * They appear in the footer of every page and on the Contact page. Both show one synced pattern (a reusable
 * `wp_block` post, listed under Appearance > Editor > Patterns as "Kiroku Studio: studio address, phone, email and
 * social links"); every place that shows it holds only a reference to it (<!-- wp:block {"ref":…} /-->). Edit the
 * pattern once and every page changes together. No other pattern, page or template repeats the address, the phone
 * number, the email addresses or the social links: calls to action link to the Contact page instead.
 *
 * The first copy of the pattern is created from inc/info/studio.html when the theme is activated (or, failing that,
 * the first time a page asks for it). Site-relative links in it ("/contact/") get this site's address. It is tagged
 * with the `_kiroku_studio_info` post meta, so it is found again in any status and never created twice; a synced
 * pattern the user moved to the trash is respected (it stays there and renders nothing) until it is deleted for good.
 * Nothing the user wrote is ever changed.
 *
 * @package kiroku-studio
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kiroku_Studio_Info' ) ) {

	/**
	 * Synced pattern for the studio details.
	 */
	final class Kiroku_Studio_Info {

		const META = '_kiroku_studio_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'studio' => __( 'Kiroku Studio: studio address, phone, email and social links', 'kiroku-studio' ),
			);
		}

		/** Hooks. */
		public static function boot() {
			// Before the demo import (priority 10), so the pages it writes already point at the synced pattern.
			add_action( 'after_switch_theme', array( __CLASS__, 'ensure_all' ), 5 );
		}

		/** Creates any missing synced pattern. */
		public static function ensure_all() {
			foreach ( array_keys( self::blocks() ) as $key ) {
				self::id( $key );
			}
		}

		/** The default markup of one shared block (inc/info/<key>.html). */
		public static function source( $key ) {
			$file   = __DIR__ . '/info/' . $key . '.html';
			$markup = is_readable( $file ) ? trim( (string) file_get_contents( $file ) ) : ''; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
			$markup = str_replace( '{{theme}}/assets/images/', get_theme_file_uri( 'assets/images/' ), $markup );
			// Site-relative links ("/contact/") point at this site, also when WordPress lives in a subfolder.
			return preg_replace_callback(
				'#href="(/[a-z0-9/_-]*)([\#"?])#i',
				function ( $m ) {
					return 'href="' . esc_url( home_url( $m[1] ) ) . $m[2];
				},
				$markup
			);
		}

		/**
		 * Post ID of the synced pattern for $key (created on first use), or 0 when it cannot be saved.
		 *
		 * @param string $key studio.
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
		 * @param string $key studio.
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Kiroku_Studio_Info::boot();
}
