<?php
/**
 * Title: Home: framed-window hero
 * Slug: mise-studio/front-hero
 * Categories: mise-studio
 * Keywords: hero, photo, outline
 * Viewport Width: 1440
 * Description: A 72/28 split under the header: a documentary kitchen photograph with a thin white stepped outline drawn over the cooking line and slow cross-fade, and a flat pale panel with the three-line headline and an arrow link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"ms-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ms-hero"><!-- wp:group {"className":"ms-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ms-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-hero__slide ms-hero__slide--1"} -->
<figure class="wp-block-image size-full ms-hero__slide ms-hero__slide--1"><img src="<?php echo mise_studio_img( 'hero-plan-on-pass' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_hero-plan-on-pass' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-hero__slide ms-hero__slide--2"} -->
<figure class="wp-block-image size-full ms-hero__slide ms-hero__slide--2"><img src="<?php echo mise_studio_img( 'hero-tape-floor' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_hero-tape-floor' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="ms-hero__outline" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><polygon points="21.5,40 38,40 38,33 56,33 56,83.7 21.5,83.7"/></svg><button type="button" class="ms-chev ms-chev--prev" aria-label="<?php echo esc_attr( mise_studio_t( 'hero_prev' ) ); ?>"><svg viewBox="0 0 28 56" width="28" height="56" aria-hidden="true" focusable="false"><path d="M24 4 4 28l20 24" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ms-hero__panel"><!-- wp:paragraph {"className":"ms-eyebrow"} -->
<p class="ms-eyebrow"><?php echo esc_html( mise_studio_t( 'tagline' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ms-hero__h1"} -->
<h1 class="wp-block-heading ms-hero__h1"><?php echo mise_studio_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-hero__link"} -->
<p class="ms-hero__link"><a href="#brief"><?php echo esc_html( mise_studio_t( 'hero_link' ) ); ?></a><svg class="ms-arrow" width="22" height="10" viewBox="0 0 22 10" aria-hidden="true" focusable="false"><path d="M1 9 20 1M14 1h6v6" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<button type="button" class="ms-chev ms-chev--next" aria-label="<?php echo esc_attr( mise_studio_t( 'hero_next' ) ); ?>"><svg viewBox="0 0 28 56" width="28" height="56" aria-hidden="true" focusable="false"><path d="M4 4l20 24L4 52" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
