<?php
/**
 * Shizuka Hearing — functions and definitions.
 *
 * @package shizuka-hearing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'SHIZUKA_HEARING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shizuka_hearing_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shizuka_hearing_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so the hidden states never flash).
 */
function shizuka_hearing_enqueue() {
	wp_enqueue_style( 'shizuka-hearing-style', get_stylesheet_uri(), array(), SHIZUKA_HEARING_VERSION );
	wp_enqueue_style( 'shizuka-hearing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shizuka-hearing-style' ), SHIZUKA_HEARING_VERSION );
	wp_enqueue_script( 'shizuka-hearing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIZUKA_HEARING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shizuka_hearing_enqueue' );

/**
 * Pattern category.
 */
function shizuka_hearing_pattern_categories() {
	register_block_pattern_category(
		'shizuka-hearing',
		array(
			'label'       => __( 'Shizuka Hearing', 'shizuka-hearing' ),
			'description' => __( 'Sections for a calm audiology clinic: the scattered photo-tile hero, the statement band, sticky stacked journey cards, the clinic figure pair, fees, stories and the closing parallax.', 'shizuka-hearing' ),
		)
	);
}
add_action( 'init', 'shizuka_hearing_pattern_categories' );

/**
 * Alt text of the theme's photographs.
 *
 * @return array<string,string>
 */
function shizuka_hearing_alts() {
	return array(
		'h01' => 'Audiologist seating a behind-the-ear hearing aid on a seated man\'s ear',
		'h02' => 'Fingertip holding a tiny hearing aid against a soft white background',
		'h03' => 'Two friends talking and laughing across a café table in window light',
		'h04' => 'Grandparent laughing with a grandchild at a bright kitchen table',
		'h05' => 'Adult ear and cheek in soft window light, seen in profile',
		'h06' => 'Quiet bright waiting room with two chairs, a plant, and a blurred window',
		'h07' => 'Empty sound booth with headphones resting on a chair behind glass',
		'h08' => 'Blurred bright clinic corridor filled with soft circles of light',
		'h09' => 'Audiologist showing a seated patient a tablet with an unreadable chart',
		'h10' => 'Hearing aids resting in an open charging case on a white table',
		'h11' => 'Thin probe tube at a patient\'s ear while an audiologist watches a monitor',
		'h12' => 'Woman leaning forward to listen among blurred diners in a restaurant',
		'h13' => 'Patient and audiologist smiling during a relaxed follow-up conversation',
		'h14' => 'Man laughing with friends around a quiz-night table in a bright pub',
		'h15' => 'Glass clinic door on a quiet street in soft morning light',
		'h16' => 'Calm man seated in a consulting chair beside a small sound generator',
		'h17' => 'Woman singing in a community choir rehearsal with a hearing aid visible',
		'h18' => 'Older couple walking and talking together on a park path in the morning',
	);
}

/**
 * Image block markup for one of the theme's photographs (used by the patterns).
 *
 * @param string $id    Photo id (h01–h18).
 * @param string $class Extra class names.
 * @return string
 */
function shizuka_hearing_img( $id, $class = '' ) {
	$alts = shizuka_hearing_alts();
	$src  = esc_url( get_theme_file_uri( 'assets/images/' . $id . '.webp' ) );
	$alt  = esc_attr( isset( $alts[ $id ] ) ? $alts[ $id ] : '' );
	$cls  = trim( $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $cls ) . '"} -->' . "\n"
		. '<figure class="wp-block-image size-full ' . esc_attr( $cls ) . '"><img src="' . $src . '" alt="' . $alt . '"/></figure>' . "\n"
		. '<!-- /wp:image -->';
}
