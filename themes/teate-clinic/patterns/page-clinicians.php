<?php
/**
 * Title: Page: Clinicians
 * Slug: teate-clinic/page-clinicians
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Clinicians: split head, two long profiles, days ledger, front desk and practice manager.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'hero-shoulder.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'clinicians_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'clinicians_lede' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","anchor":"profiles","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="profiles" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-profs tc-profs--long sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-profs tc-profs--long sp-stagger">
<!-- wp:group {"className":"tc-prof sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait tc-prof__img"} -->
<figure class="wp-block-image size-full tc-portrait tc-prof__img"><img src="<?php echo teate_clinic_img( 'clinician-maren.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-prof__body","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof__body">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prof__name"} -->
<h2 class="wp-block-heading tc-h2 tc-prof__name"><?php echo esc_html( teate_clinic_t( 'clinicians_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-prof__role"} -->
<p class="tc-prof__role"><?php echo esc_html( teate_clinic_t( 'prof_maren_role' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'clinicians_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'clinicians_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--mini"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'prof_maren_days_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_maren_days' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'prof_maren_best_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_maren_best' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-prof sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-portrait tc-prof__img"} -->
<figure class="wp-block-image size-full tc-portrait tc-prof__img"><img src="<?php echo teate_clinic_img( 'clinician-kofi.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-prof__body","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prof__body">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prof__name"} -->
<h2 class="wp-block-heading tc-h2 tc-prof__name"><?php echo esc_html( teate_clinic_t( 'clinicians_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-prof__role"} -->
<p class="tc-prof__role"><?php echo esc_html( teate_clinic_t( 'prof_kofi_role' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'clinicians_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-prof__p"} -->
<p class="tc-prof__p"><?php echo esc_html( teate_clinic_t( 'clinicians_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="tc-ledger tc-ledger--mini"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'prof_kofi_days_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_kofi_days' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'prof_kofi_best_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'prof_kofi_best' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"days","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="days" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'clinicians_2_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'clinicians_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'clinicians_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side">
<!-- wp:html -->
<div class="tc-ledger"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'cd_1_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'cd_1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'cd_2_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'cd_2_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'cd_3_l' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'cd_3_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"desk","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="desk" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'clinicians_3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'clinicians_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'clinicians_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
