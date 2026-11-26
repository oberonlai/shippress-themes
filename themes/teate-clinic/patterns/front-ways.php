<?php
/**
 * Title: Home: find your way, tile grid
 * Slug: teate-clinic/front-ways
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Eight celadon tiles, four by two, linking to the main pages.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"ways","align":"full","className":"tc-sec tc-sec--ways","layout":{"type":"default"}} -->
<section id="ways" class="wp-block-group alignfull tc-sec tc-sec--ways">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'ways_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'ways_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tiles sp-stagger">
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/about/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 17 18 6l13 11M9 15v15h18V15M15 30v-8h6v8"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_about' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/first-visit/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M13 21V10a2 2 0 0 1 4 0v8M17 18V8a2 2 0 0 1 4 0v10M21 18v-7a2 2 0 0 1 4 0v9M25 15a2 2 0 0 1 4 0v7c0 5-4 9-9 9h-1c-4 0-6-2-8-5l-4-6a2 2 0 0 1 3-3l3 3"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_first' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/conditions/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 4c-6 4-6 9 0 13s6 9 0 13"/><circle cx="18" cy="9" r="2.2"/><circle cx="18" cy="18" r="2.2"/><circle cx="18" cy="27" r="2.2"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_cond' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/clinicians/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="13" cy="12" r="4.5"/><path d="M4 30c0-6 4-9 9-9s9 3 9 9"/><circle cx="25" cy="13" r="3.5"/><path d="M24 21c5 0 8 3 8 8"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_clin' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/prices/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 18V5h13l13 13-13 13z"/><circle cx="12" cy="12" r="2"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_prices' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/stories/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 7h26v17H15l-7 6v-6H5z"/><path d="M11 13h14M11 18h9"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_stories' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/newsletter/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="8" width="28" height="20" rx="2"/><path d="M5 10l13 10 13-10"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_letter' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-tilebox sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-tilebox sp-reveal sp-reveal--up">
<!-- wp:html -->
<a class="tc-tile" href="/contact/"><svg class="tc-ico" width="28" height="28" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 33s11-10 11-18a11 11 0 0 0-22 0c0 8 11 18 11 18z"/><circle cx="18" cy="15" r="4"/></svg><span class="tc-tile__label"><?php echo esc_html( teate_clinic_t( 'way_contact' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
