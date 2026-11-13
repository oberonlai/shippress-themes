<?php
/** Optional plugin forms. Copy unchanged into the theme's inc/shippress-forms.php. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/** Patterns serialize a dynamic block, never snapshot plugin availability at import time. */
function shippress_form_slot( $attributes ) {
	return serialize_block( array( 'blockName' => 'shippress/form', 'attrs' => $attributes, 'innerBlocks' => array(), 'innerHTML' => '', 'innerContent' => array() ) );
}

/** Public shortcode APIs only. MailPoet has no public form-list API: configure its ID. */
function shippress_form_plugin( $kind ) {
	$plugins = 'newsletter' === $kind ? array( 'mailpoet_form' => '', 'mc4wp_form' => 'mc4wp-form' ) : array( 'contact-form-7' => 'wpcf7_contact_form', 'wpforms' => 'wpforms' );
	// CF7/WPForms newsletter use is explicit: never mistake an arbitrary contact form for consent.
	if ( 'newsletter' === $kind ) { $plugins += array( 'contact-form-7' => '', 'wpforms' => '' ); }
	foreach ( $plugins as $shortcode => $post_type ) {
		if ( ! shortcode_exists( $shortcode ) ) { continue; }
		$id = 0;
		if ( $post_type ) {
			$forms = get_posts( array( 'post_type' => $post_type, 'post_status' => 'publish', 'numberposts' => 1, 'orderby' => 'ID', 'order' => 'ASC', 'fields' => 'ids' ) );
			$id = $forms ? absint( $forms[0] ) : 0;
		}
		$id = absint( apply_filters( 'shippress_form_id', $id, $shortcode, $kind ) );
		if ( ! $id ) { continue; }
		try { $html = do_shortcode( '[' . $shortcode . ' id="' . $id . '"]' ); }
		catch ( \Throwable $error ) { continue; }
		if ( ! preg_match( '/<form\b/i', $html ) ) { continue; }
		if ( 'newsletter' === $kind && ! preg_match( '/<input\b[^>]*\btype=[\'"]email[\'"]/i', $html ) ) { continue; }
		return $html;
	}
	return '';
}

function shippress_form_render( $attributes ) {
	$a = array_merge( array( 'kind' => 'contact', 'fallback' => '', 'email' => '', 'label' => '', 'submit' => '', 'notice' => '', 'subject' => '' ), $attributes );
	$kind = 'newsletter' === $a['kind'] ? 'newsletter' : 'contact';
	$html = shippress_form_plugin( $kind );
	if ( ! $html && 'contact' === $kind ) { $html = wp_kses_post( $a['fallback'] ); }
	if ( ! $html && 'newsletter' === $kind ) {
		$email = sanitize_email( $a['email'] );
		// Native mailto form works without JS; the visible notice explains it is a request, not instant signup.
		$mailto = 'mailto:' . $email . '?subject=' . rawurlencode( $a['subject'] );
		$action = esc_url( apply_filters( 'shippress_newsletter_action', '', $a ), array( 'https' ) );
		if ( ! preg_match( '~^https://~i', html_entity_decode( $action ) ) ) { $action = ''; }
		$id = wp_unique_id( 'sp-newsletter-' );
		$html = '<form class="sp-newsletter-fallback" action="' . ( $action ?: esc_url( $mailto ) ) . '" method="post"' . ( $action ? '' : ' enctype="text/plain"' ) . '>';
		$html .= '<label for="' . esc_attr( $id ) . '">' . esc_html( $a['label'] ) . '</label>';
		$html .= '<input id="' . esc_attr( $id ) . '" name="email" type="email" autocomplete="email" required aria-describedby="' . esc_attr( $id . '-notice' ) . '">';
		$html .= '<button type="submit">' . esc_html( $a['submit'] ) . '</button><p id="' . esc_attr( $id . '-notice' ) . '">' . esc_html( $a['notice'] ) . '</p></form>';
	}
	return '<div class="sp-form-slot" data-sp-form="' . esc_attr( $kind ) . '">' . $html . '</div>';
}

add_action( 'init', function () {
	$attributes = array();
	foreach ( array( 'kind', 'fallback', 'email', 'label', 'submit', 'notice', 'subject' ) as $key ) { $attributes[ $key ] = array( 'type' => 'string', 'default' => '' ); }
	wp_register_script( 'shippress-forms-editor', get_theme_file_uri( 'assets/shippress-forms-editor.js' ), array( 'wp-blocks', 'wp-element', 'wp-server-side-render', 'wp-i18n', 'wp-block-editor' ), wp_get_theme()->get( 'Version' ), true );
	register_block_type( 'shippress/form', array( 'api_version' => 3, 'attributes' => $attributes, 'render_callback' => 'shippress_form_render', 'editor_script' => 'shippress-forms-editor', 'supports' => array( 'html' => false ) ) );
} );
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'shippress-forms', get_theme_file_uri( 'assets/shippress-forms.css' ), array(), wp_get_theme()->get( 'Version' ) );
} );
add_action( 'after_setup_theme', function () { add_editor_style( 'assets/shippress-forms.css' ); } );
