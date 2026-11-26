<?php
/**
 * Title: Page: newsletter
 * Slug: kodou-charging/page-newsletter
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Standalone updates signup with the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--page">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'news_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'news_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'visits@kodou-charging.example', 'label' => kodou_charging_t( 'forms_email' ), 'submit' => kodou_charging_t( 'forms_subscribe' ), 'notice' => kodou_charging_t( 'forms_mail_notice' ), 'subject' => kodou_charging_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
