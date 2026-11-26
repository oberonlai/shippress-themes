<?php
/**
 * Title: Page: Prices
 * Slug: teate-clinic/page-prices
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Prices: split head, anchor sheet, the six-visit table with the hands-only note, ruled rows for receipts, cancelling, the five-pack and the workplace visit.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'prices-linen.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'prices_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'prices_lede' ) ); ?></p>
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
<nav class="tc-sheet" aria-label="<?php echo teate_clinic_a( 'sheet_page' ); ?>"><a class="tc-sheet__cell" href="#visits"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="18" cy="18" r="13"/><path d="M23 12a7 7 0 1 0 0 12M11 16h9M11 20h9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_prices_1' ) ); ?></span></a><a class="tc-sheet__cell" href="#insurance"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="9" y="6" width="18" height="25" rx="3"/><path d="M14 6V4h8v2M13 14h10M13 19h10M13 24h6"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_prices_2' ) ); ?></span></a><a class="tc-sheet__cell" href="#cancel"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 4l11 4v8c0 8-5 13-11 16C12 29 7 24 7 16V8z"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_prices_3' ) ); ?></span></a><a class="tc-sheet__cell" href="#workplace"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="9" y="5" width="18" height="26" rx="2"/><path d="M21 18h2"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_prices_4' ) ); ?></span></a><a class="tc-sheet__cell" href="#book"><svg class="tc-ico" width="36" height="36" viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="5" y="9" width="26" height="18" rx="3"/><path d="M6 11l12 9 12-9"/></svg><span class="tc-sheet__label"><?php echo esc_html( teate_clinic_t( 'sh_prices_5' ) ); ?></span></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"visits","align":"full","className":"tc-sec tc-psec tc-sec--prices","layout":{"type":"default"}} -->
<section id="visits" class="wp-block-group alignfull tc-sec tc-psec tc-sec--prices">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'prices_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'prices_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'prices_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'prices_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"tc-pt"} -->
<figure class="wp-block-table tc-pt"><table><thead><tr><th><?php echo esc_html( teate_clinic_t( 'pt_h1' ) ); ?></th><th><?php echo esc_html( teate_clinic_t( 'pt_h2' ) ); ?></th><th><?php echo esc_html( teate_clinic_t( 'pt_h3' ) ); ?></th><th><?php echo esc_html( teate_clinic_t( 'pt_h4' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( teate_clinic_t( 'price_1_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_1_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_1_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( teate_clinic_t( 'price_2_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_2_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_2_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( teate_clinic_t( 'price_3_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_3_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_3_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( teate_clinic_t( 'price_4_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_4_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_4_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( teate_clinic_t( 'price_5_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_5_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_5_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( teate_clinic_t( 'price_6_v' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_6_w' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_6_len' ) ); ?></td><td><?php echo esc_html( teate_clinic_t( 'price_6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"tc-note tc-note--p"} -->
<p class="tc-note tc-note--p"><?php echo esc_html( teate_clinic_t( 'prices_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"insurance","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="insurance" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'prices_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"cancel","align":"full","className":"tc-sec tc-prow tc-prow--alt","layout":{"type":"default"}} -->
<section id="cancel" class="wp-block-group alignfull tc-sec tc-prow tc-prow--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'prices_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"pack","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="pack" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'prices_3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"workplace","align":"full","className":"tc-sec tc-prow tc-prow--alt","layout":{"type":"default"}} -->
<section id="workplace" class="wp-block-group alignfull tc-sec tc-prow tc-prow--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'prices_4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_4_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'prices_4_b' ) ); ?></p>
<!-- /wp:paragraph -->
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
