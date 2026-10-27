<?php
/**
 * Title: Home: hero
 * Slug: budou-academy/front-hero
 * Categories: budou-academy
 * Keywords: sommelier, school, wine
 * Viewport Width: 1440
 * Description: Interlocking rounded photo tiles, the headline on a solid sage card and the next-term bar.
 */
?>
<!-- wp:group {"className":"ba-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ba-hero"><!-- wp:group {"className":"ba-hero__tiles","layout":{"type":"default"}} -->
<div class="wp-block-group ba-hero__tiles"><!-- wp:group {"className":"ba-ph ba-ph--k2 sp-parallax ba-par-10","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ph ba-ph--k2 sp-parallax ba-par-10"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k2-nose.webp' ) ); ?>" alt="<?php echo esc_attr( budou_academy_t( 'a3e47a646' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ba-ph ba-ph--k3 sp-parallax ba-par-10","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ph ba-ph--k3 sp-parallax ba-par-10"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k3-decant.webp' ) ); ?>" alt="<?php echo esc_attr( budou_academy_t( 'a5ff3ea06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ba-ph ba-ph--k4 sp-parallax ba-par-m8","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ph ba-ph--k4 sp-parallax ba-par-m8"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k4-glasses.webp' ) ); ?>" alt="<?php echo esc_attr( budou_academy_t( 'a5dbce39c' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ba-ph ba-ph--k1 sp-parallax ba-par-m8","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ph ba-ph--k1 sp-parallax ba-par-m8"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k1-pour.webp' ) ); ?>" alt="<?php echo esc_attr( budou_academy_t( 'a33f00061' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"ba-hero__h1"} -->
<h1 class="wp-block-heading ba-hero__h1"><?php echo wp_kses_post( budou_academy_t( 'k4f61df26' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ba-termbar","layout":{"type":"default"}} -->
<div class="wp-block-group ba-termbar"><!-- wp:paragraph {"className":"ba-termbar__lab"} -->
<p class="ba-termbar__lab"><?php echo wp_kses_post( budou_academy_t( 'kafc7dc7b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ba-termbar__c"} -->
<p class="ba-termbar__c"><?php echo wp_kses_post( budou_academy_t( 'k2df9cd59' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ba-termbar__c"} -->
<p class="ba-termbar__c"><?php echo wp_kses_post( budou_academy_t( 'kae9269b3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ba-termbar__btn"} -->
<div class="wp-block-button ba-termbar__btn"><a class="wp-block-button__link wp-element-button" href="/the-day/"><?php echo wp_kses_post( budou_academy_t( 'k86278b0e' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
