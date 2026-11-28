<?php
/**
 * Title: Home: balance notes
 * Slug: taira-clinic/front-notes
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Pale band with the monthly letter heading on the left and the newsletter form slot on the right (email field and submit even without a plugin).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"notes","align":"full","className":"tc-sec tc-sec--notes tc-band","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull tc-sec tc-sec--notes tc-band">
<!-- wp:group {"className":"tc-wrap tc-notes","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-notes">
<!-- wp:group {"className":"tc-notes__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-notes__t">
<!-- wp:heading {"level":3,"className":"tc-h3"} -->
<h3 class="wp-block-heading tc-h3"><?php echo esc_html( taira_clinic_t( 'nt_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'nt_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-notes__f","layout":{"type":"default"}} -->
<div class="wp-block-group tc-notes__f">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@taira-clinic.example', 'label' => taira_clinic_t( 'forms_email' ), 'submit' => taira_clinic_t( 'forms_subscribe' ), 'notice' => taira_clinic_t( 'forms_mail_notice' ), 'subject' => taira_clinic_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
