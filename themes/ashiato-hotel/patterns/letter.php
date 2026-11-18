<?php
/**
 * Title: Letter: the register letter
 * Slug: ashiato-hotel/letter
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: A pale sage band with the seasonal letter description and the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-letter","anchor":"letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group ah-sec ah-letter"><!-- wp:group {"className":"ah-letter__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ah-letter__grid"><!-- wp:group {"className":"ah-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group ah-letter__text"><!-- wp:heading {"level":2,"className":"ah-h2 ah-h2--letter"} -->
<h2 class="wp-block-heading ah-h2 ah-h2--letter"><?php echo esc_html( ashiato_hotel_t( 'letter_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group ah-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@ashiatohotel.example', 'label' => ashiato_hotel_t( 'forms_email' ), 'submit' => ashiato_hotel_t( 'forms_subscribe' ), 'notice' => ashiato_hotel_t( 'forms_mail_notice' ), 'subject' => ashiato_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
