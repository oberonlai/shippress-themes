<?php
/**
 * Title: Header: top bar
 * Slug: zaseki-panel/header-main
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Notice strip and the single top bar with the wordmark, the anchor menu and the pre-order button.
 */
?>
<!-- wp:group {"align":"full","className":"zp-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-header">
<!-- wp:group {"className":"zp-strip","layout":{"type":"default"}} -->
<div class="wp-block-group zp-strip">
<!-- wp:paragraph {"className":"zp-strip__t"} -->
<p class="zp-strip__t"><a href="/#price"><?php echo esc_html( zaseki_panel_t( 'strip' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"zp-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide zp-bar">
<!-- wp:group {"className":"zp-brand","layout":{"type":"default"}} -->
<div class="wp-block-group zp-brand">
<!-- wp:paragraph {"className":"zp-wordmark"} -->
<p class="zp-wordmark"><a href="/"><?php echo esc_html( zaseki_panel_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-slogan"} -->
<p class="zp-slogan"><?php echo esc_html( zaseki_panel_t( 'slogan' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"always","className":"zp-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:html -->
<?php
$zp_langs = array(
	'en'    => 'EN',
	'zh-TW' => zaseki_panel_endonym( 'zh-TW' ),
	'ja'    => zaseki_panel_endonym( 'ja' ),
	'fr'    => 'FR',
	'de'    => 'DE',
);
$zp_cur   = zaseki_panel_lang();
echo '<nav class="zp-lang" aria-label="' . esc_attr( zaseki_panel_t( 'lang_label' ) ) . '"><ul>';
foreach ( $zp_langs as $zp_code => $zp_name ) {
	$zp_url = add_query_arg( 'lang', $zp_code, home_url( '/' ) );
	if ( function_exists( 'pll_the_languages' ) || defined( 'ICL_SITEPRESS_VERSION' ) ) {
		$zp_url = apply_filters( 'wpml_permalink', home_url( '/' ), $zp_code );
	}
	echo '<li><a href="' . esc_url( $zp_url ) . '" hreflang="' . esc_attr( $zp_code ) . '" lang="' . esc_attr( $zp_code ) . '"' . ( $zp_code === $zp_cur ? ' aria-current="true"' : '' ) . '>' . esc_html( $zp_name ) . '</a></li>';
}
echo '</ul></nav>';
?>
<!-- /wp:html -->
<!-- wp:buttons {"className":"zp-head-btn"} -->
<div class="wp-block-buttons zp-head-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'btn_pre' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
