<?php
/**
 * Title: Page: About
 * Slug: teate-clinic/page-about
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: About: split head, story, hands-only prose, parallax room band, day ledger, front-desk people.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'about-clinicians.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'about_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'about_lede' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","anchor":"story","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section id="story" class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'about_0_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'about_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'about_0_b' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","anchor":"hands","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="hands" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'about_1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prose sp-reveal sp-reveal--up">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"not","align":"full","className":"tc-sec tc-prow tc-prow--plain","layout":{"type":"default"}} -->
<section id="not" class="wp-block-group alignfull tc-sec tc-prow tc-prow--plain">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'about_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"room","align":"full","className":"tc-band sp-parallax","layout":{"type":"default"}} -->
<section id="room" class="wp-block-group alignfull tc-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-band__img"} -->
<figure class="wp-block-image size-full tc-band__img"><img src="<?php echo teate_clinic_img( 'band-room.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-band__in">
<!-- wp:group {"className":"tc-bandcard","layout":{"type":"default"}} -->
<div class="wp-block-group tc-bandcard">
<!-- wp:paragraph {"className":"tc-bandcard__q"} -->
<p class="tc-bandcard__q"><?php echo esc_html( teate_clinic_t( 'band_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-bandcard__p"} -->
<p class="tc-bandcard__p"><?php echo esc_html( teate_clinic_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-psec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-psec">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'about_3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-prose","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prose">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_3_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"day","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-split","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split">
<!-- wp:group {"className":"tc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__main">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'about_4_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'about_4_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'about_4_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__side tc-split__side--ledger","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__side tc-split__side--ledger">
<!-- wp:html -->
<div class="tc-ledger tc-ledger--day"><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_1_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_1_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_2_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_2_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_3_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_3_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_4_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_4_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_5_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_5_v' ) ); ?></span></div><div class="tc-ledger__row"><span class="tc-ledger__l"><?php echo esc_html( teate_clinic_t( 'day_6_t' ) ); ?></span><span class="tc-ledger__v"><?php echo esc_html( teate_clinic_t( 'day_6_v' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"people","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'about_5_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_5_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'about_5_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
