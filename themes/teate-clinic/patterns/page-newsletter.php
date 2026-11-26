<?php
/**
 * Title: Page: Clinic letter
 * Slug: teate-clinic/page-newsletter
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Clinic letter: split head, what the letter holds, the email request form slot with mailto fallback, prices and stopping.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"tc-sec tc-phead","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-sec tc-phead">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-phead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-phead__photo"} -->
<figure class="wp-block-image size-full tc-phead__photo"><img src="<?php echo teate_clinic_img( 'letter-band.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-phead__side","layout":{"type":"default"}} -->
<div class="wp-block-group tc-phead__side">
<!-- wp:group {"className":"tc-card tc-card--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--page">
<!-- wp:paragraph {"className":"tc-card__kicker"} -->
<p class="tc-card__kicker"><?php echo esc_html( teate_clinic_t( 'card_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-phead__h1"} -->
<h1 class="wp-block-heading tc-phead__h1"><?php echo esc_html( teate_clinic_t( 'newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:separator {"className":"tc-card__rule","opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity tc-card__rule"/>
<!-- /wp:separator -->
<!-- wp:paragraph {"className":"tc-phead__lede"} -->
<p class="tc-phead__lede"><?php echo esc_html( teate_clinic_t( 'newsletter_lede' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","anchor":"holds","align":"full","className":"tc-sec tc-prow ","layout":{"type":"default"}} -->
<section id="holds" class="wp-block-group alignfull tc-sec tc-prow ">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-prow__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__grid sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h2 tc-prow__h"} -->
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'newsletter_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'newsletter_0_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'newsletter_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"ask","align":"full","className":"tc-sec tc-psec tc-psec--alt","layout":{"type":"default"}} -->
<section id="ask" class="wp-block-group alignfull tc-sec tc-psec tc-psec--alt">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'newsletter_1_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'newsletter_1_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'newsletter_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-formwrap">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@teate-clinic.example', 'label' => teate_clinic_t( 'forms_email' ), 'submit' => teate_clinic_t( 'forms_subscribe' ), 'notice' => teate_clinic_t( 'forms_mail_notice' ), 'subject' => teate_clinic_t( 'forms_mail_subject' ) ) ); ?>
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
<h2 class="wp-block-heading tc-h2 tc-prow__h"><?php echo esc_html( teate_clinic_t( 'newsletter_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-prow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-prow__b">
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'newsletter_2_a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'newsletter_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
