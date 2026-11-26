<?php
/**
 * Title: Home: survey waitlist
 * Slug: fuchi-glazing/front-waitlist
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Two columns: the waitlist promise on the left and the newsletter form slot on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"waitlist","align":"full","className":"fg-sec fg-sec--wait","layout":{"type":"default"}} -->
<section id="waitlist" class="wp-block-group alignfull fg-sec fg-sec--wait">
<!-- wp:group {"className":"fg-wrap fg-wait","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap fg-wait">
<!-- wp:group {"className":"fg-wait__l","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wait__l">
<!-- wp:heading {"level":3,"className":"fg-wait__h"} -->
<h3 class="wp-block-heading fg-wait__h"><?php echo esc_html( fuchi_glazing_t( 'wl_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'wl_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-wait__r","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wait__r">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'survey@fuchi-glazing.example', 'label' => fuchi_glazing_t( 'forms_email' ), 'submit' => fuchi_glazing_t( 'forms_subscribe' ), 'notice' => fuchi_glazing_t( 'forms_mail_notice' ), 'subject' => fuchi_glazing_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
