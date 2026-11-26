<?php
/**
 * Title: Home: hero (full-bleed photograph, headline below, card row)
 * Slug: seimyaku-clinic/front-hero
 * Categories: seimyaku-clinic
 * Keywords: hero, clinic, nephrology
 * Viewport Width: 1440
 * Description: A full-bleed photograph of a consultation at a scan monitor with a wave veil that rises, a hairline arc and a scroll pill; the headline and one button below it; a row of four cards at the foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-hero"><!-- wp:group {"className":"sz-hero__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'hero-scan-consult.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'aa41cd29d' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sp-parallax__layer"></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="sz-arc" viewBox="0 0 520 40" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 3 Q260 74 520 3" pathLength="1" fill="none" stroke="#fff" stroke-opacity=".6" stroke-width="1" vector-effect="non-scaling-stroke"/></svg>
<!-- /wp:html -->

<!-- wp:html -->
<a class="sz-pill" href="#message" aria-label="<?php echo esc_attr( seimyaku_clinic_t( 'a3e922820' ) ); ?>"><svg viewBox="0 0 16 16" width="12" height="12" aria-hidden="true" focusable="false"><path d="M8 2v10M3.5 8l4.5 4.5L12.5 8" fill="none" stroke="currentColor" stroke-width="1.4"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__text"><!-- wp:group {"className":"sz-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__head"><!-- wp:paragraph {"className":"sz-eyebrow"} -->
<p class="sz-eyebrow"><?php echo wp_kses_post( seimyaku_clinic_t( 'k848b604d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-hero__title"} -->
<h1 class="wp-block-heading sz-hero__title"><?php echo wp_kses_post( seimyaku_clinic_t( 'ke412fda2' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-hero__lead","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__lead"><!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead"><?php echo wp_kses_post( seimyaku_clinic_t( 'ke9853ee4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sz-btn"} -->
<div class="wp-block-button sz-btn"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k43700e64' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-hero__cards","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__cards"><!-- wp:group {"className":"sz-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-card"><!-- wp:paragraph {"className":"sz-card__chip"} -->
<p class="sz-card__chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'kfc206df9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-card__title"} -->
<p class="sz-card__title"><a href="/first-visit/"><?php echo wp_kses_post( seimyaku_clinic_t( 'kc6e86ca0' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta sz-card__meta"} -->
<p class="is-style-sz-meta sz-card__meta"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k934d0edb' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'kcce70e28' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-card"><!-- wp:paragraph {"className":"sz-card__chip"} -->
<p class="sz-card__chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k423e555c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-card__title"} -->
<p class="sz-card__title"><a href="/monitoring/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k100f6638' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta sz-card__meta"} -->
<p class="is-style-sz-meta sz-card__meta"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k829859d0' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'ke94b03fb' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-card"><!-- wp:paragraph {"className":"sz-card__chip"} -->
<p class="sz-card__chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k605f009b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-card__title"} -->
<p class="sz-card__title"><a href="/conditions/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k3f930a8d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta sz-card__meta"} -->
<p class="is-style-sz-meta sz-card__meta"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k6456a81e' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'kbffb24bc' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-card"><!-- wp:paragraph {"className":"sz-card__chip"} -->
<p class="sz-card__chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k6a7e7316' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-card__title"} -->
<p class="sz-card__title"><a href="/visit/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8a681b29' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta sz-card__meta"} -->
<p class="is-style-sz-meta sz-card__meta"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k43f2f8f0' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k911bad98' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
