<?php
/**
 * Title: Page: Conditions
 * Slug: teate-clinic/page-conditions
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Conditions: split head, anchor sheet, three complaint sections with photographs, referral ledger.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'why-hands.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'conditions_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'conditions_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="tc-boxes"><a class="tc-box tc-box--a" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_bookfirst' ) ); ?></span></a><a class="tc-box tc-box--b" href="tel:+00445550172"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_call' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-psheet","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-psheet">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:html -->
<nav class="tc-sheet" aria-label="<?php echo teate_clinic_a( 'sheet_page' ); ?>"><a class="tc-sheet__cell" href="#neck"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="13" cy="12" r="4.5"/><path d="M4 30c0-6 4-9 9-9s9 3 9 9"/><circle cx="25" cy="13" r="3.5"/><path d="M24 21c5 0 8 3 8 8"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_conditions_1' ) ); ?></span></a><a class="tc-sheet__cell" href="#back"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="11" y="4" width="14" height="7" rx="3.5"/><rect x="11" y="14.5" width="14" height="7" rx="3.5"/><rect x="11" y="25" width="14" height="7" rx="3.5"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_conditions_2' ) ); ?></span></a><a class="tc-sheet__cell" href="#sport"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 19h8l3-9 5 18 4-9h10"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_conditions_3' ) ); ?></span></a><a class="tc-sheet__cell" href="#refer"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="6" width="24" height="24" rx="5"/><path d="M18 11v14M11 18h14"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_conditions_4' ) ); ?></span></a><a class="tc-sheet__cell" href="#book"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="5" y="9" width="26" height="18" rx="3"/><path d="M6 11l12 9 12-9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_conditions_5' ) ); ?></span></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"neck","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="neck" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-cond__img"} -->
<figure class="wp-block-image size-full tc-cond__img"><img src="<?php echo teate_clinic_img( 'complaint-neck.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-cond__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond__b">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'conditions_0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"back","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="back" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-cond__img"} -->
<figure class="wp-block-image size-full tc-cond__img"><img src="<?php echo teate_clinic_img( 'complaint-back.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-cond__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond__b">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'conditions_1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"sport","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="sport" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-cond sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-cond__img"} -->
<figure class="wp-block-image size-full tc-cond__img"><img src="<?php echo teate_clinic_img( 'complaint-sport.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-cond__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-cond__b">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'conditions_2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'conditions_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"refer","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="refer" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'conditions_3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'conditions_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'conditions_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'refer_1_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'refer_1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'refer_2_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'refer_2_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'refer_3_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'refer_3_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'refer_4_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'refer_4_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:html -->
<div class="tc-boxes tc-boxes--row"><a class="tc-box tc-box--a" href="/first-visit/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_first' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_first_sub' ) ); ?></span></a><a class="tc-box tc-box--b" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_ret' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_ret_sub' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
