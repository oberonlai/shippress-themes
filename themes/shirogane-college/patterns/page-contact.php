<?php
/**
 * Title: Page: Contact
 * Slug: shirogane-college/page-contact
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: the contact form slot with a mailto fallback on the left, address, phone, hours and directions on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_contact' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'ct_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'college-building.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"contact","align":"full","className":"sg-sec sg-sec--form","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group alignfull sg-sec sg-sec--form">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ct_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ct_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--75","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--75">
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:heading {"className":"sg-formh"} -->
<h2 class="wp-block-heading sg-formh"><?php echo esc_html( shirogane_college_t( 'ct_fh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ct_fp' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-form","layout":{"type":"default"}} -->
<div class="wp-block-group sg-form">
<?php /* Site owners: with Contact Form 7 or WPForms active, the first published form replaces the email button. Suggested fields: full name*, email*, phone, I am (career changer / school leaver / clinic staff / parent or supporter / partner clinic), question about (diploma / foundation certificate / evening course / fees and bursaries / placements), message*, consent* (link to /privacy/). */ ob_start(); ?>
<div class="wp-block-buttons sg-btns"><div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="mailto:admissions@shirogane-college.example?subject=<?php echo rawurlencode( shirogane_college_t( 'contact_subject' ) ); ?>"><?php echo esc_html( shirogane_college_t( 'contact_email' ) ); ?></a></div></div>
<?php $fallback = ob_get_clean(); ?>
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:html -->
<ul class="sg-rows sp-stagger sg-rows--s"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ct_k1' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ct_v1' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ct_k2' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ft_phone' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ct_k3' ) ); ?></div><div class="sg-row__v"><p><a href="mailto:admissions@shirogane-college.example">admissions@shirogane-college.example</a></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ct_k4' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ct_v4' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ct_k5' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ct_v5' ) ); ?></p></div></li></ul>
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#questions"><span class="sg-pick__ico" style="--sg-tile:#657A3E"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8.5"/><path d="M9.5 9.5a2.5 2.5 0 1 1 3.5 2.3c-.7.4-1 .9-1 1.7M12 16.5v.5"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx6' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
