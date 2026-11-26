<?php
/**
 * Title: Home: split hero with info card and five-cell sheet
 * Slug: teate-clinic/front-hero
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Rounded photo left; right column holds a celadon info card, the headline and two outline entry boxes; a shadowed five-cell sheet with dotted dividers sits under it.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-hero">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-hero__photo"} -->
<figure class="wp-block-image size-full tc-hero__photo"><img src="<?php echo teate_clinic_img( 'hero-shoulder.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__side">
<!-- wp:html -->
<div class="tc-card"><p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p><p class="tc-card__tag"><?php echo esc_html( teate_clinic_t( 'card_tag' ) ); ?></p><hr class="tc-card__rule"><p class="tc-card__addr"><?php echo esc_html( teate_clinic_t( 'card_addr' ) ); ?><br><a href="tel:+00445550172"><?php echo esc_html( teate_clinic_t( 'phone' ) ); ?></a></p></div>
<!-- /wp:html -->
<!-- wp:group {"className":"tc-hero__mid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__mid">
<!-- wp:heading {"level":1,"className":"tc-hero__h1"} -->
<h1 class="wp-block-heading tc-hero__h1"><?php echo teate_clinic_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hero__lede"} -->
<p class="tc-hero__lede"><?php echo esc_html( teate_clinic_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="tc-boxes"><a class="tc-box tc-box--a" href="/first-visit/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_first' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_first_sub' ) ); ?></span></a><a class="tc-box tc-box--b" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_ret' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_ret_sub' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="tc-sheet" aria-label="<?php echo teate_clinic_a( 'sheet_label' ); ?>"><a class="tc-sheet__cell" href="#first-hour"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M13 21V10a2 2 0 0 1 4 0v8M17 18V8a2 2 0 0 1 4 0v10M21 18v-7a2 2 0 0 1 4 0v9M25 15a2 2 0 0 1 4 0v7c0 5-4 9-9 9h-1c-4 0-6-2-8-5l-4-6a2 2 0 0 1 3-3l3 3"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'cell_first' ) ); ?></span></a><a class="tc-sheet__cell" href="#complaints"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 4c-6 4-6 9 0 13s6 9 0 13"/><circle cx="18" cy="9" r="2.2"/><circle cx="18" cy="18" r="2.2"/><circle cx="18" cy="27" r="2.2"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'cell_complaints' ) ); ?></span></a><a class="tc-sheet__cell" href="#clinicians"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="13" cy="12" r="4.5"/><path d="M4 30c0-6 4-9 9-9s9 3 9 9"/><circle cx="25" cy="13" r="3.5"/><path d="M24 21c5 0 8 3 8 8"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'cell_clinicians' ) ); ?></span></a><a class="tc-sheet__cell" href="#hours"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="18" r="13"/><path d="M18 9v9l6 4"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'cell_hours' ) ); ?></span></a><a class="tc-sheet__cell" href="/contact/"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 33s11-10 11-18a11 11 0 0 0-22 0c0 8 11 18 11 18z"/><circle cx="18" cy="15" r="4"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'cell_find' ) ); ?></span></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
