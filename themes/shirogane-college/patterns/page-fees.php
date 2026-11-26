<?php
/**
 * Title: Page: Fees
 * Slug: shirogane-college/page-fees
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Fees page: the six-row table with a nowrap fee column, what is included, and instalments, bursaries, refunds and exclusions as dotted rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_fees' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'fe_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'fe_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'pharmacy-count.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p15' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"fees","align":"full","className":"sg-sec sg-sec--fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull sg-sec sg-sec--fees">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'fee_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'fee_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:table {"className":"sg-fees"} -->
<figure class="wp-block-table sg-fees"><table><thead><tr><th><?php echo esc_html( shirogane_college_t( 'fee_th1' ) ); ?></th><th><?php echo esc_html( shirogane_college_t( 'fee_th2' ) ); ?></th><th><?php echo esc_html( shirogane_college_t( 'fee_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( shirogane_college_t( 'fee1_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee1_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'fee2_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee2_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'fee3_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee3_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'fee4_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee4_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'fee5_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee5_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'fee6_n' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee6_d' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'fee6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"sg-note"} -->
<p class="sg-note"><?php echo esc_html( shirogane_college_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"included","align":"full","className":"sg-sec sg-sec--incl","layout":{"type":"default"}} -->
<section id="included" class="wp-block-group alignfull sg-sec sg-sec--incl">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'fe_ih' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'fe_is' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="sg-incl sp-stagger"><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i1' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i2' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i3' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i4' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i5' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i6' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i7' ) ); ?></li><li class="sp-reveal sp-reveal--up"><?php echo esc_html( shirogane_college_t( 'fe_i8' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"terms","align":"full","className":"sg-sec sg-sec--terms","layout":{"type":"default"}} -->
<section id="terms" class="wp-block-group alignfull sg-sec sg-sec--terms">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'fe_th' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'fe_ts' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'fe_r1k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'fe_r1h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'fe_r1p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'fe_r2k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'fe_r2h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'fe_r2p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'fe_r3k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'fe_r3h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'fe_r3p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'fe_r4k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'fe_r4h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'fe_r4p' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"next","align":"full","className":"sg-sec sg-sec--picks","layout":{"type":"default"}} -->
<section id="next" class="wp-block-group alignfull sg-sec sg-sec--picks">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'nx_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'nx_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#open-day"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx2' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#questions"><span class="sg-pick__ico" style="--sg-tile:#657A3E"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8.5"/><path d="M9.5 9.5a2.5 2.5 0 1 1 3.5 2.3c-.7.4-1 .9-1 1.7M12 16.5v.5"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx6' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sg-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-cta">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-cta__in","layout":{"type":"default"}} -->
<div class="wp-block-group sg-cta__in">
<!-- wp:paragraph {"className":"sg-cta__t"} -->
<p class="sg-cta__t"><?php echo esc_html( shirogane_college_t( 'cta_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sg-btns"} -->
<div class="wp-block-buttons sg-btns"><!-- wp:button {"className":"sg-btn"} -->
<div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="/admissions/#apply"><?php echo esc_html( shirogane_college_t( 'cta_apply' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"sg-btn sg-btn--outline"} -->
<div class="wp-block-button sg-btn sg-btn--outline"><a class="wp-block-button__link wp-element-button" href="/visit/#ward-visit"><?php echo esc_html( shirogane_college_t( 'cta_visit' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
