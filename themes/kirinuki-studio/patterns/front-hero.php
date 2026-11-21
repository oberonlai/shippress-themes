<?php
/**
 * Title: Home: mist hero
 * Slug: kirinuki-studio/front-hero
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Mist gradient hero with grain: headline, lede and the Book a shoot pill at the left, a chamfered three-column product triptych at the right and a foot row of five client wordmarks.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"kr-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kr-hero"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-hero__inner"><!-- wp:group {"className":"kr-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-hero__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-hero__h"} -->
<h1 class="wp-block-heading kr-hero__h"><?php echo esc_html( kirinuki_studio_t( 'hero_h1' ) ); ?> <em class="kr-hero__light"><?php echo esc_html( kirinuki_studio_t( 'hero_light' ) ); ?></em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-hero__lede"} -->
<p class="kr-hero__lede"><?php echo esc_html( kirinuki_studio_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group kr-hero__actions"><!-- wp:buttons {"className":"kr-btns"} -->
<div class="wp-block-buttons kr-btns"><!-- wp:button {"className":"kr-pill kr-pill--dark"} -->
<div class="wp-block-button kr-pill kr-pill--dark"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kr-hero__link"} -->
<p class="kr-hero__link"><a href="#rate"><?php echo esc_html( kirinuki_studio_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'h1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'h2.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'h3.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-logos","layout":{"type":"default"}} -->
<div class="wp-block-group kr-logos"><!-- wp:paragraph {"className":"kr-logos__label"} -->
<p class="kr-logos__label"><?php echo esc_html( kirinuki_studio_t( 'logos_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-logos__list","layout":{"type":"default"}} -->
<div class="wp-block-group kr-logos__list"><!-- wp:paragraph {"className":"kr-logo"} -->
<p class="kr-logo"><?php echo esc_html( kirinuki_studio_t( 'logo_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-logo"} -->
<p class="kr-logo"><?php echo esc_html( kirinuki_studio_t( 'logo_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-logo"} -->
<p class="kr-logo"><?php echo esc_html( kirinuki_studio_t( 'logo_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-logo"} -->
<p class="kr-logo"><?php echo esc_html( kirinuki_studio_t( 'logo_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-logo"} -->
<p class="kr-logo"><?php echo esc_html( kirinuki_studio_t( 'logo_5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
