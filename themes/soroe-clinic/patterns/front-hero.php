<?php
/**
 * Title: Home: split hero
 * Slug: soroe-clinic/front-hero
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Pale cell: one tall rounded photograph at the left with three docked chips, the headline and lead beside it, one thread line crossing photo and headline, and a logo-row of four service marks.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"so-cell so-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull so-cell so-hero"><!-- wp:group {"className":"so-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-hero__grid"><!-- wp:group {"className":"so-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group so-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-hero__img"} -->
<figure class="wp-block-image size-full so-hero__img"><img src="<?php echo soroe_clinic_img( 'p01-kv-next-tray.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"so-chips","layout":{"type":"default"}} -->
<div class="wp-block-group so-chips"><!-- wp:paragraph {"className":"so-chip so-chip--phone"} -->
<p class="so-chip so-chip--phone"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-chip so-chip--pin"} -->
<p class="so-chip so-chip--pin"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'chip_addr' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-chip so-chip--book"} -->
<p class="so-chip so-chip--book"><a href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"so-vlabel"} -->
<p class="so-vlabel"><?php echo esc_html( soroe_clinic_t( 'hero_vlabel' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group so-hero__text"><!-- wp:paragraph {"className":"so-eyebrow"} -->
<p class="so-eyebrow"><?php echo esc_html( soroe_clinic_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"so-hero__h"} -->
<h1 class="wp-block-heading so-hero__h"><?php echo soroe_clinic_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<svg class="so-stroke" viewBox="0 0 200 28" width="200" height="28" aria-hidden="true" focusable="false"><path class="so-stroke__line" pathLength="1" d="M2 20C40 22 70 8 110 12C150 16 172 4 186 8C198 12 192 24 180 20C170 16 178 6 188 12"/><circle class="so-thread__dot" cx="188" cy="12" r="3"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"so-hero__lead"} -->
<p class="so-hero__lead"><?php echo esc_html( soroe_clinic_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group so-hero__actions"><!-- wp:buttons {"className":"so-btn so-btn--arrow-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--arrow-wrap"><!-- wp:button {"className":"so-btn so-btn--arrow"} -->
<div class="wp-block-button so-btn so-btn--arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/how-a-course-works/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_course' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
<svg class="so-thread" viewBox="0 0 1424 804" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path class="so-thread__line" pathLength="1" d="M432 330C512 316 612 270 692 240C760 214 840 250 930 240C1030 228 1100 176 1204 152C1270 138 1318 130 1346 114C1376 96 1356 62 1328 66C1296 70 1294 112 1330 126"/><circle class="so-thread__dot" cx="1331" cy="127" r="3.5"/><text class="so-thread__tag" x="1070" y="196" transform="rotate(-20 1070 196)"><?php echo esc_html( soroe_clinic_t( 'hero_tag' ) ); ?></text></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"so-logorow","layout":{"type":"default"}} -->
<div class="wp-block-group so-logorow"><!-- wp:group {"className":"so-logo","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo"><!-- wp:html -->
<svg class="so-glyph " viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 19c1-6 5-9 9-9"/><path d="M12 23c1-6 5-9 11-9"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"so-logo__t","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo__t"><!-- wp:paragraph {"className":"so-logo__name"} -->
<p class="so-logo__name"><a href="<?php echo esc_url( home_url( '/treatments/#teens' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_teens' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-logo__sub"} -->
<p class="so-logo__sub"><?php echo esc_html( soroe_clinic_t( 'logo_teens_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-logo","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo"><!-- wp:html -->
<svg class="so-glyph " viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 21C7 8 21 8 25 21"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"so-logo__t","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo__t"><!-- wp:paragraph {"className":"so-logo__name"} -->
<p class="so-logo__name"><a href="<?php echo esc_url( home_url( '/treatments/#adults' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_adults' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-logo__sub"} -->
<p class="so-logo__sub"><?php echo esc_html( soroe_clinic_t( 'logo_adults_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-logo","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo"><!-- wp:html -->
<svg class="so-glyph " viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 17c0-6 4-9 10-9s10 3 10 9c0 2-2 3-4 3-2 0-3-2-6-2s-4 2-6 2c-2 0-4-1-4-3z"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"so-logo__t","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo__t"><!-- wp:paragraph {"className":"so-logo__name"} -->
<p class="so-logo__name"><a href="<?php echo esc_url( home_url( '/treatments/#aligners' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_aligners' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-logo__sub"} -->
<p class="so-logo__sub"><?php echo esc_html( soroe_clinic_t( 'logo_aligners_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-logo","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo"><!-- wp:html -->
<svg class="so-glyph " viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 21c0-8 4-12 9-12s9 4 9 12"/><path d="M5 21h18"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"so-logo__t","layout":{"type":"default"}} -->
<div class="wp-block-group so-logo__t"><!-- wp:paragraph {"className":"so-logo__name"} -->
<p class="so-logo__name"><a href="<?php echo esc_url( home_url( '/treatments/#retainers' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_retainers' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-logo__sub"} -->
<p class="so-logo__sub"><?php echo esc_html( soroe_clinic_t( 'logo_retainers_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
