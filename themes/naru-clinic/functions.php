<?php
/**
 * Naru Clinic — functions and definitions.
 *
 * @package naru-clinic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NARU_CLINIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function naru_clinic_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'naru_clinic_setup' );

/**
 * Front-end styles and the scroll effects (sp-scroll). The script loads in the head, not deferred, so the hidden
 * state is set before the first paint.
 */
function naru_clinic_enqueue() {
	wp_enqueue_style( 'naru-clinic-style', get_stylesheet_uri(), array(), NARU_CLINIC_VERSION );
	wp_enqueue_style( 'naru-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'naru-clinic-style' ), NARU_CLINIC_VERSION );
	wp_enqueue_script( 'naru-clinic-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NARU_CLINIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'naru_clinic_enqueue' );

/**
 * The previous and next buttons of the services row scroll it by one card. A click handler only, no scroll listener.
 */
function naru_clinic_row_buttons() {
	?>
<script>
document.addEventListener('click',function(e){var b=e.target.closest&&e.target.closest('[data-nc-scroll]');if(!b){return;}var r=b.closest('.nc-band').querySelector('.nc-row');if(r){var c=r.querySelector('.nc-card');r.scrollBy({left:(c?c.offsetWidth+30:400)*parseInt(b.getAttribute('data-nc-scroll'),10),behavior:'smooth'});}});
</script>
	<?php
}
add_action( 'wp_footer', 'naru_clinic_row_buttons' );

/**
 * Pattern category.
 */
function naru_clinic_pattern_categories() {
	register_block_pattern_category(
		'naru-clinic',
		array(
			'label'       => __( 'Naru Clinic', 'naru-clinic' ),
			'description' => __( 'Sections for an occupational health clinic: the wave-edged photograph, blob photo pairs, the method panel, the blue service band, the case story, the price table and the enquiry block.', 'naru-clinic' ),
		)
	);
}
add_action( 'init', 'naru_clinic_pattern_categories' );

/**
 * Hero photo is the LCP element: add fetchpriority at render time, since the
 * attribute is not part of core/image's saved markup and would invalidate the block.
 */
function naru_clinic_hero_fetchpriority( $content, $block ) {
	if ( 'core/image' === $block['blockName'] && false !== strpos( $content, 'nc-hero__photo' ) && false === strpos( $content, 'fetchpriority' ) ) {
		$content = preg_replace( '/<img /', '<img fetchpriority="high" ', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block', 'naru_clinic_hero_fetchpriority', 10, 2 );
