<?php
/**
 * Title: Page: Visit & open days
 * Slug: shirogane-college/page-visit
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Visit page: open-day programme rows, a parallax ward-visit band, a five-cell who-comes row and the booking form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_visit' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'vi_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'vi_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'openday-talk.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"open-day","align":"full","className":"sg-sec sg-sec--open","layout":{"type":"default"}} -->
<section id="open-day" class="wp-block-group alignfull sg-sec sg-sec--open">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'vi_oh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'vi_os' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'vi_oi' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot1' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o1h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o1p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot2' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o2h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o2p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot3' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o3h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o3p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot4' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o4h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o4p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot5' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o5h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o5p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_ot6' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'vi_o6h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_o6p' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"ward-visit","align":"full","className":"sg-sec sg-sec--ward","layout":{"type":"default"}} -->
<section id="ward-visit" class="wp-block-group alignfull sg-sec sg-sec--ward">
<!-- wp:cover {"url":"<?php echo shirogane_college_img( 'openday-tour.webp' ); ?>","dimRatio":0,"minHeight":520,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"sg-wardband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left sg-wardband sp-parallax" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p13' ) ); ?>" src="<?php echo shirogane_college_img( 'openday-tour.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"sg-wardband__rev sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wardband__rev sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sg-wardband__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wardband__panel">
<!-- wp:paragraph {"className":"sg-eyebrow sg-eyebrow--light"} -->
<p class="sg-eyebrow sg-eyebrow--light"><?php echo esc_html( shirogane_college_t( 'vi_wv_eb' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"sg-wardband__h"} -->
<h2 class="wp-block-heading sg-wardband__h"><?php echo esc_html( shirogane_college_t( 'vi_wv_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-wardband__p"} -->
<p class="sg-wardband__p"><?php echo esc_html( shirogane_college_t( 'vi_wv_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="sg-ulink" href="#book"><?php echo esc_html( shirogane_college_t( 'vi_wv_l' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"who","align":"full","className":"sg-sec sg-sec--who","layout":{"type":"default"}} -->
<section id="who" class="wp-block-group alignfull sg-sec sg-sec--who">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'vi_wh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'vi_ws' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-who sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sg-who sp-stagger">
<!-- wp:html -->
<div class="sg-who__row"><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3.5 8.5h17v10h-17z"/><path d="M9 8.5v-2h6v2"/><circle cx="8.5" cy="13" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="15.5" cy="13" r="1"/><path d="M10.5 16.5c.5-1 2.5-1 3 0"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who1' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_w1' ) ); ?></p><a class="sg-tlink" href="#book"><span><?php echo esc_html( shirogane_college_t( 'vi_book' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 8a5 5 0 0 1 10 0v11.5H7z"/><path d="M9.5 8h5M7 14h10M10 14v3h4v-3"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who2' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_w2' ) ); ?></p><a class="sg-tlink" href="#book"><span><?php echo esc_html( shirogane_college_t( 'vi_book' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who3' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_w3' ) ); ?></p><a class="sg-tlink" href="#book"><span><?php echo esc_html( shirogane_college_t( 'vi_book' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="7" r="2.5"/><circle cx="16.5" cy="9" r="2"/><path d="M3.5 19.5v-4a4.5 4.5 0 0 1 9 0v4M13.5 19.5v-3a3.5 3.5 0 0 1 7 0v3"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who4' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_w4' ) ); ?></p><a class="sg-tlink" href="#book"><span><?php echo esc_html( shirogane_college_t( 'vi_book' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 20.5v-12l8-4.5 8 4.5v12z"/><path d="M12 9.5v6M9 12.5h6"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who5' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'vi_w5' ) ); ?></p><a class="sg-tlink" href="#book"><span><?php echo esc_html( shirogane_college_t( 'vi_book' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"book","align":"full","className":"sg-sec sg-sec--form","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull sg-sec sg-sec--form">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'vi_bh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'vi_bs' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--75","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--75">
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:heading {"className":"sg-formh"} -->
<h2 class="wp-block-heading sg-formh"><?php echo esc_html( shirogane_college_t( 'vi_fh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'vi_fp' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-form","layout":{"type":"default"}} -->
<div class="wp-block-group sg-form">
<?php /* Site owners: with Contact Form 7 or WPForms active, the first published form replaces the email button. Suggested fields: full name*, email*, phone*, visit type* (open day Saturday 16 January 10:00-13:00 / ward visit Wednesday 15:30), preferred Wednesday (date), visitors (1-3), access needs, consent* (link to /privacy/). */ ob_start(); ?>
<div class="wp-block-buttons sg-btns"><div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="mailto:admissions@shirogane-college.example?subject=<?php echo rawurlencode( shirogane_college_t( 'visit_subject' ) ); ?>"><?php echo esc_html( shirogane_college_t( 'visit_email' ) ); ?></a></div></div>
<?php $fallback = ob_get_clean(); ?>
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:html -->
<ul class="sg-rows sp-stagger sg-rows--s"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_f1k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'vi_f1v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_f2k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'vi_f2v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_f3k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'vi_f3v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_f4k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'vi_f4v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'vi_f5k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'vi_f5v' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/fees/"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8"/><path d="M14.5 9a3 3 0 1 0 0 6M8.5 11h5M8.5 13.5h5"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx1' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/tutors/"><span class="sg-pick__ico" style="--sg-tile:#A5586B"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="8" r="3.5"/><path d="M5 20v-2.5a4.5 4.5 0 0 1 4.5-4.5h5a4.5 4.5 0 0 1 4.5 4.5V20"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx4' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
