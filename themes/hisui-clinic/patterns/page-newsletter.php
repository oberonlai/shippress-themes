<?php
/**
 * Title: Page: Newsletter
 * Slug: hisui-clinic/page-newsletter
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Newsletter page: slim photo window with the white rule, what we send, the subscribe form slot and the privacy note.
 */
?>
<!-- wp:group {"className":"hc-window hc-window--slim sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--slim sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'A1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_A1' ) ); ?>" width="1568" height="220" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-read hc-form-sec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read hc-form-sec"><!-- wp:group {"className":"hc-visit__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-visit__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@hisui-clinic.example', 'label' => hisui_clinic_t( 'forms_email' ), 'submit' => hisui_clinic_t( 'forms_subscribe' ), 'notice' => hisui_clinic_t( 'forms_mail_notice' ), 'subject' => hisui_clinic_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_newsletter_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
