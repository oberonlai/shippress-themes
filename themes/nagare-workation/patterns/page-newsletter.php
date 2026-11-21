<?php
/**
 * Title: Page: Newsletter
 * Slug: nagare-workation/page-newsletter
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: The lake letter page with the newsletter form slot on a white rounded card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--tight"><!-- wp:group {"className":"nw-wrap nw-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-wrap--narrow"><!-- wp:paragraph {"className":"nw-lede"} -->
<p class="nw-lede"><?php echo esc_html( nagare_workation_t( 'nl_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"nw-sec nw-sec--ground nw-sec--tight","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--tight"><!-- wp:group {"className":"nw-wrap nw-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-wrap--narrow"><!-- wp:group {"className":"nw-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group nw-formcard"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@nagare-hotel.example', 'label' => nagare_workation_t( 'forms_email' ), 'submit' => nagare_workation_t( 'forms_subscribe' ), 'notice' => nagare_workation_t( 'forms_mail_notice' ), 'subject' => nagare_workation_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
