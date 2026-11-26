<?php
/**
 * Title: Page: Newsletter
 * Slug: shirogane-college/page-newsletter
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter page: what the intake letter contains, how often it is sent, and the newsletter slot inside a pine panel with dark form tokens.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_nl' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'nl_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'openday-tour.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"letter","align":"full","className":"sg-sec sg-sec--nl","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group alignfull sg-sec sg-sec--nl">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'nl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'nl_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'nl_i' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'nl_r1k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'nl_r1h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'nl_r1p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'nl_r2k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'nl_r2h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'nl_r2p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'nl_r3k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'nl_r3h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'nl_r3p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'nl_r4k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'nl_r4h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'nl_r4p' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"sg-note"} -->
<p class="sg-note"><?php echo esc_html( shirogane_college_t( 'nl_freq' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"subscribe","align":"full","className":"sg-sec sg-sec--subscribe","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull sg-sec sg-sec--subscribe">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-npanel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-npanel">
<!-- wp:heading {"className":"sg-npanel__h"} -->
<h2 class="wp-block-heading sg-npanel__h"><?php echo esc_html( shirogane_college_t( 'nl_ph' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-npanel__p"} -->
<p class="sg-npanel__p"><?php echo esc_html( shirogane_college_t( 'nl_pp' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-npanel__f","layout":{"type":"default"}} -->
<div class="wp-block-group sg-npanel__f">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@shirogane-college.example', 'label' => shirogane_college_t( 'forms_email' ), 'submit' => shirogane_college_t( 'forms_subscribe' ), 'notice' => shirogane_college_t( 'forms_mail_notice' ), 'subject' => shirogane_college_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#open-day"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx2' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/course/"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx8' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
