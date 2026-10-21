<?php
/**
 * Title: Home: inset hero print on a tinted band
 * Slug: hada-dermatology/front-inset-hero
 * Categories: hada-dermatology
 * Keywords: home
 * Viewport Width: 1440
 * Description: An inset photograph on an L-shaped band with a thin Latin line crossing its lower edge, hairline arcs and a staggered headline.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-hero","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-hero">
<!-- wp:html -->
<svg class="hd-arc hd-arc--arch" aria-hidden="true" width="160" height="250" viewBox="0 0 160 250" fill="none" stroke="#14171A" stroke-opacity="0.45" stroke-width="1"><path d="M0 -1 V170.0 A80.0 80.0 0 0 0 160 170.0 V-1"/><path d="M14 -1 V170.0 A66.0 66.0 0 0 0 146 170.0 V-1"/><path d="M28 -1 V170.0 A52.0 52.0 0 0 0 132 170.0 V-1"/></svg><svg class="hd-arc hd-arc--ring" aria-hidden="true" width="166" height="166" viewBox="0 0 166 166" fill="none" stroke="#14171A" stroke-opacity="0.45" stroke-width="1"><circle cx="83" cy="83" r="82"/><circle cx="83" cy="83" r="70"/><circle cx="83" cy="83" r="58"/></svg><svg class="hd-arc hd-arc--lines" aria-hidden="true" width="100%" height="14" fill="none" stroke="#14171A" stroke-opacity="0.45" stroke-width="1"><line x1="0" x2="100%" y1="1" y2="1"/><line x1="0" x2="100%" y1="7" y2="7"/><line x1="0" x2="100%" y1="13" y2="13"/></svg>
<!-- /wp:html -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hd-hero__photo"} -->
<figure class="wp-block-image size-large hd-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-consult.webp' ) ); ?>" alt="<?php echo esc_attr( hada_dermatology_t( 'k9b832fa5' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"hd-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group hd-hero__head">
<!-- wp:paragraph {"className":"hd-hero__l1"} -->
<p class="hd-hero__l1"><?php echo wp_kses_post( hada_dermatology_t( 'k589f281b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"hd-hero__l2"} -->
<h1 class="wp-block-heading hd-hero__l2"><?php echo wp_kses_post( hada_dermatology_t( 'k76694f0f' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hd-hero__meta"} -->
<p class="hd-hero__meta"><?php echo wp_kses_post( hada_dermatology_t( 'k7054f659' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hd-fact"} -->
<p class="hd-fact"><?php echo wp_kses_post( hada_dermatology_t( 'kf95063e0' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hd-standard"} -->
<p class="hd-standard"><?php echo wp_kses_post( hada_dermatology_t( 'k50191a68' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="hd-scroll" aria-hidden="true"><span class="hd-scroll__rule"></span><span class="hd-scroll__label"><?php echo wp_kses_post( hada_dermatology_t( 'k090a3c80' ) ); ?></span></div>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
