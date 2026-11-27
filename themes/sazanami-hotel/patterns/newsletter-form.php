<?php
/**
 * Title: Newsletter form slot
 * Slug: sazanami-hotel/newsletter-form
 * Categories: sazanami-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The newsletter slot on the slate ground: a required email field and submit that open the mail app, with a notice that nothing is subscribed yet.
 */
?>
<!-- wp:group {"className":"sz-letter__f sz-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__f sz-form-wrap"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sazanami-hotel.example', 'label' => sazanami_hotel_t( 'forms_email' ), 'submit' => sazanami_hotel_t( 'forms_subscribe' ), 'notice' => sazanami_hotel_t( 'forms_mail_notice' ), 'subject' => sazanami_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
