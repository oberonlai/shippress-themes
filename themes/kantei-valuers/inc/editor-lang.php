<?php
/**
 * ShipPress shared: give the block editor canvas the same <html lang> as the front end.
 *
 * The editor canvas is an iframe whose <html> has no lang attribute, so every :lang(zh) / :lang(ja) rule in style.css
 * (the CJK font stacks, weights and line heights) applies on the front end only and the editor falls back to other
 * fonts. This prints a one-line script into the canvas (enqueue_block_assets reaches the iframe) that sets the lang the
 * front end uses: the site locale after the theme's own language_attributes filter (the sample-content language).
 * Copy shared/inc/editor-lang.php unchanged; change the shared copy only.
 *
 * @package shippress
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'shippress_editor_canvas_lang' ) ) {
	/**
	 * The lang the front end prints on <html> ('' when unknown).
	 *
	 * @return string
	 */
	function shippress_editor_canvas_lang() {
		$attrs = apply_filters( 'language_attributes', 'lang="' . esc_attr( str_replace( '_', '-', get_locale() ) ) . '"', 'html' );
		return preg_match( '/lang="([A-Za-z0-9-]+)"/', (string) $attrs, $m ) ? $m[1] : '';
	}

	/**
	 * Sets that lang on the editor canvas document (not on the admin page around it).
	 */
	function shippress_editor_canvas_lang_script() {
		if ( ! is_admin() ) {
			return;
		}
		$lang = shippress_editor_canvas_lang();
		if ( '' === $lang ) {
			return;
		}
		wp_register_script( 'shippress-editor-lang', false, array(), '1.0.0', false );
		wp_enqueue_script( 'shippress-editor-lang' );
		wp_add_inline_script( 'shippress-editor-lang', 'if(window.frameElement){document.documentElement.lang=' . wp_json_encode( $lang ) . ';}' );
	}
	add_action( 'enqueue_block_assets', 'shippress_editor_canvas_lang_script' );
}
