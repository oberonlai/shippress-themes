<?php
/**
 * Fukubi Clinic: functions and definitions.
 *
 * @package fukubi-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'FUKUBI_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared but not required.
 */
function fukubi_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'fukubi_clinic_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden state never flashes).
 */
function fukubi_clinic_enqueue() {
	wp_enqueue_style( 'fukubi-clinic-style', get_stylesheet_uri(), array(), FUKUBI_CLINIC_VERSION );
	wp_enqueue_style( 'fukubi-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'fukubi-clinic-style' ), FUKUBI_CLINIC_VERSION );
	wp_enqueue_script( 'fukubi-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), FUKUBI_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'fukubi_clinic_enqueue' );

/**
 * Pattern category.
 */
function fukubi_clinic_pattern_categories() {
	register_block_pattern_category(
		'fukubi-clinic',
		array(
			'label'       => __( 'Fukubi Clinic', 'fukubi-clinic' ),
			'description' => __( 'Sections for a gastroenterology clinic: a pale wash with five gliding circular photographs, a halo and a dot-matrix week card, bowl-topped symptom cards, minute-marker visit rows, a parallax scope-room band, a two-readers panel, figures, fees and news rows.', 'fukubi-clinic' ),
		)
	);
}
add_action( 'init', 'fukubi_clinic_pattern_categories' );

/**
 * Section label: 14 px gradient square and a tracked English word (written in the markup, editable).
 *
 * @param string $text  Label text.
 * @param string $extra Extra class names.
 * @return string Block markup.
 */
function fc_label( $text, $extra = '' ) {
	$cls = trim( 'fc-label ' . $extra );
	return '<!-- wp:paragraph {"className":"' . $cls . '"} -->' . "\n"
		. '<p class="' . $cls . '"><span class="fc-label__sq" aria-hidden="true"></span>' . esc_html( $text ) . '</p>' . "\n"
		. '<!-- /wp:paragraph -->';
}

/**
 * White button with the square chevron box at the right.
 *
 * @param string $text  Label.
 * @param string $url   Link.
 * @param string $extra Extra class names (fc-btn--point for the booking button).
 * @return string Block markup.
 */
function fc_btn( $text, $url, $extra = '' ) {
	$cls = trim( 'fc-btn ' . $extra );
	return '<!-- wp:buttons {"className":"fc-btns"} -->' . "\n"
		. '<div class="wp-block-buttons fc-btns"><!-- wp:button {"className":"' . $cls . '"} -->' . "\n"
		. '<div class="wp-block-button ' . $cls . '"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $url ) . '">' . esc_html( $text ) . '</a></div>' . "\n"
		. '<!-- /wp:button --></div>' . "\n"
		. '<!-- /wp:buttons -->';
}

/**
 * The dot-matrix week card (Mon to Hol by two time bands). Dots: filled = open, ring = scope morning (fasting), slash = closed.
 *
 * @param string $variant '' (hero), 'compact' (morning row only) or 'wide'.
 * @return string Block markup.
 */
function fc_week_card( $variant = '' ) {
	$days  = explode( ',', fc_t( 'wk_days' ) );
	$full  = explode( ',', fc_t( 'wk_days_full' ) );
	$am    = array( 'o', 's', 'o', 's', 'o', 's', 'x', 'x' );
	$pm    = array( 'o', 'o', 'x', 'o', 'o', 'x', 'x', 'x' );
	$names = array(
		'o' => fc_t( 'wk_open' ),
		's' => fc_t( 'wk_scope' ),
		'x' => fc_t( 'wk_closed' ),
	);
	$rows  = array(
		array( fc_t( 'wk_am' ), $am, fc_t( 'wk_morning' ) ),
		array( fc_t( 'wk_pm' ), $pm, fc_t( 'wk_afternoon' ) ),
	);
	if ( 'compact' === $variant ) {
		$rows = array( $rows[0] );
	}
	$h  = '<div class="fc-wk__head"><svg class="fc-wk__clock" width="22" height="22" viewBox="0 0 22 22" aria-hidden="true" fill="none" stroke="#5E6A72" stroke-width="1.5" stroke-linecap="round"><circle cx="11" cy="11" r="9"/><path d="M11 6v5.5l3.5 2"/></svg><span class="fc-wk__label">' . esc_html( fc_t( 'wk_label' ) ) . '</span></div>';
	$h .= '<div class="fc-wk__grid"><span class="fc-wk__corner"></span>';
	foreach ( $days as $d ) {
		$h .= '<b class="fc-wk__day">' . esc_html( $d ) . '</b>';
	}
	foreach ( $rows as $row ) {
		$h .= '<span class="fc-wk__band">' . esc_html( $row[0] ) . '</span>';
		foreach ( $row[1] as $i => $state ) {
			$h .= '<span class="fc-wk__cell"><i class="fc-wk__g fc-wk__g--' . $state . '" role="img" aria-label="' . esc_attr( ( $full[ $i ] ?? '' ) . ' ' . $row[2] . ': ' . $names[ $state ] ) . '"></i></span>';
		}
	}
	$h .= '</div><p class="fc-wk__note">' . esc_html( fc_t( 'wk_note' ) ) . '</p>';
	$cls = trim( 'fc-wk ' . ( $variant ? 'fc-wk--' . $variant : '' ) );
	return '<!-- wp:html -->' . "\n" . '<div class="' . $cls . '">' . $h . '</div>' . "\n" . '<!-- /wp:html -->';
}

/**
 * Small chevron box (decorative, bottom right of cards and rows).
 *
 * @return string HTML.
 */
function fc_chev() {
	return '<span class="fc-chev" aria-hidden="true"><svg width="8" height="12" viewBox="0 0 8 12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M1.5 1.5L6 6l-4.5 4.5"/></svg></span>';
}

/**
 * Image block with our class names.
 *
 * @param string $file  File name in assets/images.
 * @param string $alt   Alt text.
 * @param string $class Class names.
 * @return string Block markup.
 */
function fc_img( $file, $alt, $class ) {
	$url = get_theme_file_uri( 'assets/images/' . $file );
	return '<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"' . $class . '"} -->' . "\n"
		. '<figure class="wp-block-image size-large ' . $class . '"><img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n"
		. '<!-- /wp:image -->';
}
