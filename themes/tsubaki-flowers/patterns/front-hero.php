<?php
/**
 * Title: Home: hero
 * Slug: tsubaki-flowers/front-hero
 * Categories: tsubaki-flowers
 * Keywords: florist, flowers, shop
 * Viewport Width: 1440
 * Description: Intro screen that fades away, then a full-bleed film-grain photograph with the headline at the bottom left.
 */
?>
<!-- wp:group {"className":"tf-intro","layout":{"type":"default"},"metadata":{"name":"Intro screen"}} -->
<div class="wp-block-group tf-intro"><!-- wp:paragraph {"className":"tf-intro__a"} -->
<p class="tf-intro__a"><?php echo wp_kses_post( tsubaki_flowers_t( 'k0d4a641c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tf-intro__b"} -->
<p class="tf-intro__b"><?php echo wp_kses_post( tsubaki_flowers_t( 'kcc6716df' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-hand-stems.webp' ) ); ?>","dimRatio":30,"customOverlayColor":"#141811","isDark":true,"minHeight":640,"contentPosition":"bottom left","align":"full","className":"tf-hero sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left tf-hero sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#141811"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tsubaki_flowers_t( 'afb63cf99' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-hand-stems.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tf-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group tf-hero__text"><!-- wp:paragraph {"className":"tf-hero__small"} -->
<p class="tf-hero__small"><?php echo wp_kses_post( tsubaki_flowers_t( 'kb716e3ba' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"tf-hero__title"} -->
<h1 class="wp-block-heading tf-hero__title"><?php echo wp_kses_post( tsubaki_flowers_t( 'k2246e18b' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
