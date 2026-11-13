<?php
/**
 * Title: Home: wedge head and photo-first hero
 * Slug: hojo-brokers/front-hero
 * Categories: hojo-brokers
 * Keywords: hero,photo
 * Viewport Width: 1440
 * Description: The pale hatched page head with the H1 and two slate wedges, then the full-bleed documentary photo with a pale haze carrying the statement and the call to action.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-hero","anchor":"top","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-hero" id="top"><!-- wp:group {"align":"full","className":"hb-headband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-headband"><!-- wp:html -->
<span class="hb-wedge hb-wedge--a" aria-hidden="true"></span><span class="hb-wedge hb-wedge--b" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"hb-wrap hb-headband__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-headband__in"><!-- wp:paragraph {"className":"hb-label"} -->
<p class="hb-label"><?php echo wp_kses_post( hojo_brokers_t( 'k82f17ddc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hb-h1"} -->
<h1 class="wp-block-heading hb-h1"><?php echo wp_kses_post( hojo_brokers_t( 'kcf368ceb' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hb-heroband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-heroband"><!-- wp:group {"className":"hb-photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hb-photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo hojo_brokers_img( 'hero-mezzanine-desk.webp' ); ?>" alt="<?php echo esc_attr( hojo_brokers_t( 'a83f29a86' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-herotext","layout":{"type":"default"}} -->
<div class="wp-block-group hb-herotext"><!-- wp:html -->
<span class="hb-rule" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-statement"} -->
<p class="hb-statement"><?php echo wp_kses_post( hojo_brokers_t( 'k769c33cc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-lead"} -->
<p class="hb-lead"><?php echo wp_kses_post( hojo_brokers_t( 'kc53aa070' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hb-cta-row"} -->
<div class="wp-block-buttons hb-cta-row"><!-- wp:button {"className":"hb-cta"} -->
<div class="wp-block-button hb-cta"><a class="wp-block-button__link wp-element-button" href="#ask"><?php echo wp_kses_post( hojo_brokers_t( 'kb27f46a5' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hb-meta"} -->
<p class="hb-meta"><?php echo wp_kses_post( hojo_brokers_t( 'k6bbd81db' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
