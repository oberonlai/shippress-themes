<?php
/**
 * Title: Header bar
 * Slug: hitomi-vision/head-bar
 * Categories: hitomi-vision
 * Inserter: no
 * Description: Lower-case wordmark at the left, the menu and an outline booking button at the right, laid over the top of the page.
 */
?>
<!-- wp:group {"align":"full","className":"hv-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hv-header"><!-- wp:site-title {"level":0,"className":"hv-brand"} /-->

<!-- wp:group {"className":"hv-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group hv-header__right"><!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"hv-nav","layout":{"type":"flex","orientation":"horizontal"}} -->
<?php
$hv_link = static function ( $key, $path ) {
	return '<!-- wp:navigation-link ' . wp_json_encode( array( 'label' => hitomi_vision_t( $key ), 'url' => home_url( $path ), 'kind' => 'custom' ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' /-->';
};
$hv_sub = $hv_link( 'nav_exams_1', '/eye-exams/' ) . $hv_link( 'nav_exams_2', '/childrens-vision/' ) . $hv_link( 'nav_exams_3', '/screen-eyes/' ) . $hv_link( 'nav_exams_4', '/dry-eye-contacts/' );
echo '<!-- wp:navigation-submenu ' . wp_json_encode( array( 'label' => hitomi_vision_t( 'nav_exams' ), 'url' => home_url( '/eye-exams/' ), 'kind' => 'custom', 'className' => 'hv-has-plus' ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' -->' . $hv_sub . '<!-- /wp:navigation-submenu -->'; // phpcs:ignore WordPress.Security.EscapeOutput
echo $hv_link( 'nav_frames', '/frames-lenses/' ) . $hv_link( 'nav_fees', '/fees/' ) . $hv_link( 'nav_about', '/about/' ) . $hv_link( 'nav_visit', '/visit/' ); // phpcs:ignore WordPress.Security.EscapeOutput
?>
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"hv-btns hv-header__cta"} -->
<div class="wp-block-buttons hv-btns hv-header__cta"><!-- wp:button {"className":"hv-btn"} -->
<div class="wp-block-button hv-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( hitomi_vision_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
