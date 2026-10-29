<?php
/**
 * Getsuji Payroll — functions and definitions.
 *
 * @package getsuji-payroll
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'GETSUJI_PAYROLL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; the theme works without the plugin.
 */
function getsuji_payroll_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'getsuji_payroll_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 */
function getsuji_payroll_enqueue() {
	wp_enqueue_style( 'getsuji-payroll-style', get_stylesheet_uri(), array(), GETSUJI_PAYROLL_VERSION );
	wp_enqueue_style( 'getsuji-payroll-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), GETSUJI_PAYROLL_VERSION );
	wp_enqueue_script( 'getsuji-payroll-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), GETSUJI_PAYROLL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'getsuji_payroll_enqueue' );

/**
 * Pattern category.
 */
function getsuji_payroll_pattern_categories() {
	register_block_pattern_category(
		'getsuji-payroll',
		array(
			'label'       => __( 'Getsuji Payroll', 'getsuji-payroll' ),
			'description' => __( 'Sections for a payroll bureau landing page: the framed full-bleed cover with a flush navy panel, the dot-grid photo rows, the square thumbnails, the pick-up numeral, the notes row, the fee table and the request cover.', 'getsuji-payroll' ),
		)
	);
}
add_action( 'init', 'getsuji_payroll_pattern_categories' );

/**
 * Alt text of the theme's photographs, by id.
 *
 * @return array
 */
function getsuji_payroll_alts() {
	return array(
		'k1'  => 'Payroll clerk pinning a blank monthly planner on a wall beside an office owner.',
		'p2'  => 'Hana Morel in a navy blazer seated at a pale oak desk, hands folded.',
		'p3'  => 'Hands passing a small stack of paper timecards across a wooden shop counter.',
		'p4'  => 'Payroll clerk and bakery owner reviewing a printed payroll sheet at a small table.',
		'p5'  => 'Hand pressing a desk calculator next to printed payslips on a pale oak table.',
		'p6'  => 'Tomás Verbeek and the bakery owner Marc Janssens at a stainless steel table with a laptop and a folder.',
		'p7'  => 'Tomás Verbeek standing by a bright window holding a wooden tray of paper timecards.',
		'p8'  => 'Two people sitting side by side at a pale consultation table by a window.',
		'p9'  => 'Close-up of a blank monthly wall planner grid with small coloured dot stickers.',
		'p10' => 'Plain sealed white envelopes neatly stacked in a wooden tray on an office desk.',
		'p11' => 'Laptop showing a blurred spreadsheet beside a white coffee cup in diffuse window light.',
		'p12' => 'Three-storey brick office building with white-framed windows seen from the street, with colleagues talking at the entrance.',
		'p13' => 'Three colleagues talking around a standing desk in a bright open office.',
		'p14' => 'Two pairs of hands passing a tabbed document folder across a pale oak desk.',
		'p15' => 'An architecture studio owner and a payroll clerk smiling at a drafting table with rolled drawings.',
		'p16' => 'A cleaning company owner standing by a blank shift board in a bright depot with cleaning carts.',
	);
}

/**
 * URL of one of the theme's photographs (assets/images/<id>.webp).
 *
 * @param string $id Photo id, e.g. P2.
 * @return string
 */
function getsuji_payroll_img( $id ) {
	return get_theme_file_uri( 'assets/images/' . strtolower( $id ) . '.webp' );
}

/**
 * An image block for one photograph.
 *
 * @param string $id    Photo id.
 * @param string $class Extra class names (also written to the block attributes).
 * @param string $img   Extra attributes for the img tag (e.g. fetchpriority).
 * @return string Block markup.
 */
function getsuji_payroll_image( $id, $class = '', $img = '' ) {
	$id    = strtolower( $id );
	$alts  = getsuji_payroll_alts();
	$class = trim( 'gp-ph gp-ph--' . $id . ' ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . esc_url( getsuji_payroll_img( $id ) ) . '" alt="' . esc_attr( isset( $alts[ $id ] ) ? $alts[ $id ] : '' ) . '"' . ( $img ? ' ' . $img : '' ) . '/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * The Getsuji mark: a ring with a 3x3 dot grid inside, one dot orange (our own mark).
 *
 * @param int    $size  Pixel size.
 * @param string $class Class on the svg.
 * @return string SVG markup.
 */
function getsuji_payroll_mark( $size, $class = 'gp-mark' ) {
	$dots = '';
	for ( $r = 0; $r < 3; $r++ ) {
		for ( $c = 0; $c < 3; $c++ ) {
			$fill  = ( 2 === $r && 2 === $c ) ? '#FA723D' : 'currentColor';
			$dots .= '<circle cx="' . ( 36 + $c * 14 ) . '" cy="' . ( 36 + $r * 14 ) . '" r="2.6" fill="' . $fill . '"/>';
		}
	}
	return '<svg class="' . esc_attr( $class ) . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="' . (int) $size . '" height="' . (int) $size . '" aria-hidden="true" focusable="false"><circle cx="50" cy="50" r="48.5" fill="none" stroke="currentColor" stroke-width="1.5"/>' . $dots . '</svg>';
}
