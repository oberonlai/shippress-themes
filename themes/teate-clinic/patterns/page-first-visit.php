<?php
/**
 * Title: Page: First visit
 * Slug: teate-clinic/page-first-visit
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: First visit: split head, anchor sheet, before, minutes ledger with count-up, after, first two prices, entry boxes.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'visit-reception.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'first-visit_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'first-visit_lede' ) ); ?></p>
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
<nav class="tc-sheet" aria-label="<?php echo teate_clinic_a( 'sheet_page' ); ?>"><a class="tc-sheet__cell" href="#before"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="9" y="6" width="18" height="25" rx="3"/><path d="M14 6V4h8v2M13 14h10M13 19h10M13 24h6"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_first-visit_1' ) ); ?></span></a><a class="tc-sheet__cell" href="#hour"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="18" r="13"/><path d="M18 9v9l6 4"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_first-visit_2' ) ); ?></span></a><a class="tc-sheet__cell" href="#after"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="8" width="24" height="22" rx="3"/><path d="M6 15h24M12 5v6M24 5v6"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_first-visit_3' ) ); ?></span></a><a class="tc-sheet__cell" href="#prices"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="18" r="13"/><path d="M23 12a7 7 0 1 0 0 12M11 16h9M11 20h9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_first-visit_4' ) ); ?></span></a><a class="tc-sheet__cell" href="#book"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="5" y="9" width="26" height="18" rx="3"/><path d="M6 11l12 9 12-9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_first-visit_5' ) ); ?></span></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"before","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="before" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'first-visit_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"hour","align":"full","className":"tc-sec tc-psec tc-psec--hour","layout":{"type":"default"}} -->
<section id="hour" class="wp-block-group alignfull tc-sec tc-psec tc-psec--hour">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'first-visit_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'hour_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:html -->
<div class="tc-ledger tc-ledger--hour"><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">10 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_1_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_1_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">15 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_2_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_2_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">25 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_3_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_3_p' ) ); ?></p></div><div class="tc-ledger__block"><div class="tc-ledger__row tc-ledger__row--big"><span class="tc-ledger__l sp-reveal sp-count">10 <small><?php echo esc_html( teate_clinic_t( 'min' ) ); ?></small></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'hour_4_h' ) ); ?></span></div><p class="tc-note"><?php echo esc_html( teate_clinic_t( 'hour_4_p' ) ); ?></p></div></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'first-visit_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'first-visit_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait"} -->
<figure class="wp-block-image size-full tc-portrait"><img src="<?php echo teate_clinic_img( 'method-movement.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"after","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="after" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'first-visit_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ol class="tc-flow"><li><span class="tc-flow__n">01</span><span><?php echo esc_html( teate_clinic_t( 'flow_1' ) ); ?></span></li><li><span class="tc-flow__n">02</span><span><?php echo esc_html( teate_clinic_t( 'flow_2' ) ); ?></span></li><li><span class="tc-flow__n">03</span><span><?php echo esc_html( teate_clinic_t( 'flow_3' ) ); ?></span></li><li><span class="tc-flow__n">04</span><span><?php echo esc_html( teate_clinic_t( 'flow_4' ) ); ?></span></li></ol>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"prices","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'first-visit_3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'first-visit_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--mini"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'fv_p1' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'fv_p1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'fv_p2' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'fv_p2_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:html -->
<div class="tc-boxes tc-boxes--row"><a class="tc-box tc-box--a" href="/first-visit/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_first' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_first_sub' ) ); ?></span></a><a class="tc-box tc-box--b" href="/book/"><span class="tc-box__disc" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="#fff" stroke-width="2" focusable="false"><path d="M7 0v14M0 7h14"/></svg></span><span class="tc-box__label"><?php echo esc_html( teate_clinic_t( 'box_ret' ) ); ?></span><span class="tc-box__sub"><?php echo esc_html( teate_clinic_t( 'box_ret_sub' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
