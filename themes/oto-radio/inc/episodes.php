<?php
/**
 * Oto Radio: episode number and running time for lists of episodes (the home page's broadcast log, the Episodes
 * index), read from the episode itself so they are written in ONE place.
 *
 * Every episode (a post) opens with a "listen bar" (pattern oto-radio/listen-bar): a Listen link, a line such as
 * "Episode 48" (class oto-listen__no) and a running time such as "52 min" (class oto-listen__time). Lists show the
 * same values through a block binding: a Paragraph block with
 *     "metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"number"}}}}
 * (or "key":"duration") inside a Query Loop shows "No. 48" (or "52 min") for the episode it belongs to. Change the
 * number or the running time in the episode and every list follows. An episode without a listen bar gets a number
 * counted by date (its place among the published posts, oldest first) and no running time.
 *
 * Nothing is stored: the values are read from the post content when a page is shown.
 *
 * @package oto-radio
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the binding source (WordPress 6.5+).
 */
function oto_radio_register_episode_source() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}
	register_block_bindings_source(
		'oto-radio/episode',
		array(
			'label'              => __( 'Episode number or running time (from the episode\'s listen bar)', 'oto-radio' ),
			'get_value_callback' => 'oto_radio_episode_value',
			'uses_context'       => array( 'postId' ),
		)
	);
}
add_action( 'init', 'oto_radio_register_episode_source' );

/**
 * Value of a bound paragraph: "No. 48" (key number) or "52 min" (key duration).
 *
 * @param array    $args  Binding args (key).
 * @param WP_Block $block Block instance (its context holds postId).
 * @return string|null
 */
function oto_radio_episode_value( $args, $block ) {
	$key = isset( $args['key'] ) ? (string) $args['key'] : '';
	$id  = isset( $block->context['postId'] ) ? (int) $block->context['postId'] : (int) get_the_ID();
	if ( ! $id || ! in_array( $key, array( 'number', 'duration' ), true ) ) {
		return null;
	}
	$info = oto_radio_episode_info( $id );
	if ( 'number' === $key ) {
		/* translators: %s: episode number. */
		return esc_html( sprintf( __( 'No. %s', 'oto-radio' ), $info['number'] ) );
	}
	return esc_html( $info['duration'] );
}

/**
 * Episode number and running time of a post.
 *
 * @param int $id Post ID.
 * @return array{number: string, duration: string}
 */
function oto_radio_episode_info( $id ) {
	static $cache = array();
	if ( isset( $cache[ $id ] ) ) {
		return $cache[ $id ];
	}
	$content  = (string) get_post_field( 'post_content', $id );
	$number   = '';
	$duration = '';
	if ( preg_match( '#<p[^>]*class="[^"]*\boto-listen__no\b[^"]*"[^>]*>(.*?)</p>#s', $content, $m ) && preg_match( '/\d+/', wp_strip_all_tags( $m[1] ), $n ) ) {
		$number = $n[0];
	}
	if ( preg_match( '#<p[^>]*class="[^"]*\boto-listen__time\b[^"]*"[^>]*>(.*?)</p>#s', $content, $m ) ) {
		$duration = trim( wp_strip_all_tags( $m[1] ) );
	}
	if ( '' === $number ) {
		$number = (string) oto_radio_episode_count( $id );
	}
	$cache[ $id ] = array(
		'number'   => $number,
		'duration' => $duration,
	);
	return $cache[ $id ];
}

/**
 * Place of a post among the published posts, oldest first (1 = the first episode).
 *
 * @param int $id Post ID.
 * @return int
 */
function oto_radio_episode_count( $id ) {
	global $wpdb;
	$date = get_post_field( 'post_date', $id );
	if ( ! $date ) {
		return 1;
	}
	// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery,WordPress.DB.DirectDatabaseQuery.NoCaching -- one small count, cached above.
	$before = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$wpdb->posts} WHERE post_type = 'post' AND post_status = 'publish' AND ( post_date < %s OR ( post_date = %s AND ID < %d ) )", $date, $date, $id ) );
	return $before + 1;
}
