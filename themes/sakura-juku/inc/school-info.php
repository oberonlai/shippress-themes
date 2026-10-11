<?php
/**
 * Sakura Juku: the school details kept in ONE place, as three synced patterns (reusable `wp_block` posts, listed under
 * Appearance > Editor > Patterns):
 * - "Sakura Juku: opening hours" (hours): when the front desk and the classrooms are open, as a table. Shown in the
 *   footer of every page and on the Contact page.
 * - "Sakura Juku: weekly class timetable" (timetable): every group class of the week by day, time and level. Shown on
 *   the Schedule page (and anywhere else you insert the pattern).
 * - "Sakura Juku: address, email and social links" (details): where the school is, how to write to it and where it
 *   posts. Shown in the footer of every page and on the Contact page.
 * Every place that shows one holds only a reference to it (<!-- wp:block {"ref":…} /-->). Edit a pattern once and
 * every page changes together. No other pattern, page, post or template repeats the hours, the timetable, the address,
 * the email address or the social links: calls to action link to the Schedule or the Contact page instead.
 *
 * The first copy of each pattern is created from inc/info/<key>.html when the theme is activated (or, failing that,
 * the first time a page asks for it). Site-relative links in it ("/contact/") get this site's address. It is tagged
 * with the `_sakura_juku_info` post meta, so it is found again in any status and never created twice; a synced
 * pattern the user moved to the trash is respected (it stays there and renders nothing) until it is deleted for good.
 * Nothing the user wrote is ever changed.
 *
 * @package sakura-juku
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Sakura_Juku_Info' ) ) {

	/**
	 * Synced patterns for the school details.
	 */
	final class Sakura_Juku_Info {

		const META = '_sakura_juku_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'hours'     => __( 'Sakura Juku: opening hours', 'sakura-juku' ),
				'timetable' => __( 'Sakura Juku: weekly class timetable', 'sakura-juku' ),
				'details'   => __( 'Sakura Juku: address, email and social links', 'sakura-juku' ),
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
		 * @param string $key hours, timetable or details.
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
		 * @param string $key hours, timetable or details.
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Sakura_Juku_Info::boot();
}
