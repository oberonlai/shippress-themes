<?php
/**
 * Saji Culinary School — functions and definitions.
 *
 * @package saji-culinary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'SAJI_CULINARY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function saji_culinary_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'saji_culinary_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint).
 */
function saji_culinary_enqueue() {
	wp_enqueue_style( 'saji-culinary-style', get_stylesheet_uri(), array(), SAJI_CULINARY_VERSION );
	wp_enqueue_style( 'saji-culinary-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'saji-culinary-style' ), SAJI_CULINARY_VERSION );
	wp_enqueue_script( 'saji-culinary-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SAJI_CULINARY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'saji_culinary_enqueue' );

/**
 * The hero ends at a 1px sentinel; once it has left the screen the header switches from the stacked look to ink pills.
 * IntersectionObserver only (no scroll listener). Without JS the pill bar is simply shown from the start.
 */
function saji_culinary_header_script() {
	?>
<script>
(function(){var b=document.documentElement;b.classList.add('saji-js');document.addEventListener('DOMContentLoaded',function(){var s=document.querySelector('.saji-sentinel');if(!s||!('IntersectionObserver' in window)){return;}new IntersectionObserver(function(e){document.body.classList.toggle('saji-past-hero',!e[0].isIntersecting&&e[0].boundingClientRect.top<0);}).observe(s);});})();
</script>
	<?php
}
add_action( 'wp_head', 'saji_culinary_header_script', 5 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function saji_culinary_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'outline-pill', 'label' => __( 'Outline pill', 'saji-culinary' ) ) );
	register_block_style( 'core/button', array( 'name' => 'pill-light', 'label' => __( 'Light pill', 'saji-culinary' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'saji-culinary' ) ) );
}
add_action( 'init', 'saji_culinary_block_styles' );

/**
 * Pattern category.
 */
function saji_culinary_pattern_categories() {
	register_block_pattern_category(
		'saji-culinary',
		array(
			'label'       => __( 'Saji Culinary School', 'saji-culinary' ),
			'description' => __( 'Sections for a professional culinary school: the framed photo cover with a timeline line, giant section words with a seal and a halftone portrait, the day rail, brick-ruled term cards, the tuition ledger, the notices list and the visit band.', 'saji-culinary' ),
		)
	);
}
add_action( 'init', 'saji_culinary_pattern_categories' );
