<?php
/**
 * Title: Home: updates newsletter band
 * Slug: kodou-charging/front-updates
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: Pale band with a short heading and line on the left and the newsletter form slot on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--upd","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--upd">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-upd","layout":{"type":"default"}} -->
<div class="wp-block-group kc-upd">
<!-- wp:group {"className":"kc-upd__t","layout":{"type":"default"}} -->
<div class="wp-block-group kc-upd__t">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'upd_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-upd__x"} -->
<p class="kc-upd__x"><?php echo esc_html( kodou_charging_t( 'upd_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'visits@kodou-charging.example', 'label' => kodou_charging_t( 'forms_email' ), 'submit' => kodou_charging_t( 'forms_subscribe' ), 'notice' => kodou_charging_t( 'forms_mail_notice' ), 'subject' => kodou_charging_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
