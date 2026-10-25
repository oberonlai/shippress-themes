<?php
/**
 * Title: Home: design band
 * Slug: mado-air/front-design
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Full-bleed dark macro photograph with a parallax background, text at the left and a white outline pill.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $u . 'design-macro.webp' ); ?>","dimRatio":40,"overlayColor":"dark","focalPoint":{"x":0.65,"y":0.5},"minHeight":710,"minHeightUnit":"px","isDark":true,"align":"full","anchor":"design","spPar":"10%","className":"ma-design sp-parallax","layout":{"type":"default"}} -->
<div id="design" class="wp-block-cover alignfull is-light ma-design sp-parallax" style="min-height:710px"><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( mado_air_t( 'a209fb265' ) ); ?>" src="<?php echo esc_url( $u . 'design-macro.webp' ); ?>" style="object-position:65% 50%" data-object-fit="cover" data-object-position="65% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"ma-design__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ma-design__in"><!-- wp:group {"className":"ma-design__text","layout":{"type":"default"}} -->
<div class="wp-block-group ma-design__text"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'k4d9e805f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ma-h2"} -->
<h2 class="wp-block-heading ma-h2"><?php echo wp_kses_post( mado_air_t( 'k64f48493' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"ma-rule ma-rule--w"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule ma-rule--w"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"ma-onDark"} -->
<p class="ma-onDark"><?php echo wp_kses_post( mado_air_t( 'k18ab1460' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ma-btnrow"} -->
<div class="wp-block-buttons ma-btnrow"><!-- wp:button {"className":"ma-pill ma-pill--white"} -->
<div class="wp-block-button ma-pill ma-pill--white"><a class="wp-block-button__link wp-element-button" href="/design/"><?php echo wp_kses_post( mado_air_t( 'kb422d0c7' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
