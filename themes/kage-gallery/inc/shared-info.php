<?php
/**
 * Kage Gallery: the visit details and the exhibitions, each kept in ONE place.
 *
 * The visit details (address, opening hours, closing days, telephone, email and social handle) appear in the full-screen
 * menu, the one-line footer of every page, the home page, Visit and Contact. The current exhibition (badge, title, dates,
 * artist, wall text) is the oversized title on the home page and the head of Exhibitions; the upcoming exhibitions appear
 * on the home page (short: the notes are hidden there by CSS) and on Exhibitions (full). Each of them is a synced pattern
 * (a reusable `wp_block` post, listed under Appearance > Editor > Patterns), and every place that shows it holds only a
 * reference to it (<!-- wp:block {"ref":…} /-->). Edit the pattern once and every page changes together. The "Now on
 * view" badge is ordinary text inside the current-exhibition pattern, so it can be renamed or removed.
 *
 * The first copy of each pattern is created from inc/info/<key>.html when the theme is activated (or, failing that,
 * the first time a page asks for it). Each one is tagged with the `_kage_gallery_info` post meta, so it is found again
 * in any status and never created twice; a synced pattern the user moved to the trash is respected (it stays there
 * and renders nothing) until it is deleted for good. Nothing the user wrote is ever changed: a theme update only
 * refreshes a synced pattern that is still exactly an earlier version's default (see upgrade()).
 *
 * @package kage-gallery
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kage_Gallery_Info' ) ) {

	/**
	 * Synced patterns for the visit details and the exhibitions.
	 */
	final class Kage_Gallery_Info {

		const META = '_kage_gallery_info';

		/** Pattern key => title shown in the Patterns screen. */
		public static function blocks() {
			return array(
				'visit'    => __( 'Kage Gallery: visit details (address, hours, telephone, email)', 'kage-gallery' ),
				'current'  => __( 'Kage Gallery: current exhibition', 'kage-gallery' ),
				'upcoming' => __( 'Kage Gallery: upcoming exhibitions', 'kage-gallery' ),
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

		/** The default markup of one shared block (inc/info/<key>.html). */
		public static function source( $key ) {
			$file = __DIR__ . '/info/' . $key . '.html';
			return is_readable( $file ) ? trim( (string) file_get_contents( $file ) ) : '';
		}

		/**
		 * Post ID of the synced pattern for $key (created on first use), or 0 when it cannot be saved.
		 *
		 * @param string $key visit, current or upcoming.
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
				self::upgrade( $key, $cache[ $key ] );
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
		 * Gives a synced pattern this version's default markup, but only while it is still exactly an earlier version's
		 * default (inc/info/legacy/<key>-<version>.html, as WordPress stored it): nobody edited it, so nothing the user
		 * wrote is lost. An edited pattern is never touched.
		 *
		 * @param string $key Pattern key.
		 * @param int    $id  Post ID of the synced pattern.
		 */
		public static function upgrade( $key, $id ) {
			$legacy = glob( __DIR__ . '/info/legacy/' . $key . '-*.html' );
			$post   = $legacy ? get_post( $id ) : null;
			if ( ! $post ) {
				return;
			}
			$squash = function ( $html ) {
				return preg_replace( '/\s+/', '', (string) $html );
			};
			$stored = $squash( $post->post_content );
			foreach ( $legacy as $file ) {
				$old = trim( (string) file_get_contents( $file ) );
				if ( $stored === $squash( $old ) || $stored === $squash( wp_kses_post( $old ) ) ) {
					$markup = self::source( $key );
					if ( '' !== $markup && $stored !== $squash( $markup ) ) {
						wp_update_post( wp_slash( array( 'ID' => $id, 'post_content' => $markup ) ) );
					}
					return;
				}
			}
		}

		/**
		 * Block markup that shows the shared block: a reference to the synced pattern, or (when it cannot be saved,
		 * e.g. a read-only preview) the default markup itself.
		 *
		 * @param string $key visit, current or upcoming.
		 * @return string
		 */
		public static function markup( $key ) {
			$id = self::id( $key );
			return $id ? '<!-- wp:block {"ref":' . $id . '} /-->' : self::source( $key );
		}
	}

	Kage_Gallery_Info::boot();
}
