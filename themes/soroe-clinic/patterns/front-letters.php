<?php
/**
 * Title: Home: letters and booking
 * Slug: soroe-clinic/front-letters
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Two cells side by side: a slate booking cell with a white thread loop, and a white cell with the Letters sign-up.
 */
?>
<!-- wp:group {"anchor":"letters","className":"so-pair","layout":{"type":"default"}} -->
<div id="letters" class="wp-block-group so-pair"><!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-book"><!-- wp:html -->
<svg class="so-whiteloop" viewBox="0 0 180 90" aria-hidden="true" focusable="false"><path pathLength="1" d="M2 74C40 72 70 44 110 40C146 36 170 24 166 12C162 2 144 6 148 20C152 32 170 34 176 28"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"so-h2 so-h2--light"} -->
<h2 class="wp-block-heading so-h2 so-h2--light"><?php echo esc_html( soroe_clinic_t( 'bk_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body so-body--light"} -->
<p class="so-body so-body--light"><?php echo esc_html( soroe_clinic_t( 'bk_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-facts"} -->
<p class="so-facts"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a> · <a href="mailto:hello@soroeclinic.example"><?php echo esc_html( soroe_clinic_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"so-btn so-btn--white-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--white-wrap"><!-- wp:button {"className":"so-btn so-btn--white"} -->
<div class="wp-block-button so-btn so-btn--white"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-letters","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-letters"><!-- wp:heading {"level":3,"className":"so-h3s"} -->
<h3 class="wp-block-heading so-h3s"><?php echo esc_html( soroe_clinic_t( 'lt_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'lt_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-form","layout":{"type":"default"}} -->
<div class="wp-block-group so-form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@soroeclinic.example', 'label' => soroe_clinic_t( 'forms_email' ), 'submit' => soroe_clinic_t( 'forms_subscribe' ), 'notice' => soroe_clinic_t( 'forms_mail_notice' ), 'subject' => soroe_clinic_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
