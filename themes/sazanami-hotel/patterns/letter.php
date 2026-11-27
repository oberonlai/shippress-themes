<?php
/**
 * Title: Letter: the newsletter slot
 * Slug: sazanami-hotel/letter
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Closing chapter on slate: a short heading at the left and the newsletter slot (a real email field and submit, with a mail-app fallback notice) at the right.
 */
?>
<!-- wp:group {"anchor":"letter","tagName":"section","className":"sz-ch sz-ch--slate sz-ch--letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group sz-ch sz-ch--slate sz-ch--letter"><!-- wp:group {"className":"sz-letter","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter"><!-- wp:group {"className":"sz-letter__t","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__t"><!-- wp:html -->
<p class="sz-opener__w sz-opener__w--left"><span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span><br><?php echo esc_html( sazanami_hotel_t( 'w_letter' ) ); ?></p>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"sz-h2"} -->
<h2 class="wp-block-heading sz-h2"><?php echo esc_html( sazanami_hotel_t( 'letter_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-body"} -->
<p class="sz-body"><?php echo esc_html( sazanami_hotel_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-letter__f sz-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__f sz-form-wrap"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sazanami-hotel.example', 'label' => sazanami_hotel_t( 'forms_email' ), 'submit' => sazanami_hotel_t( 'forms_subscribe' ), 'notice' => sazanami_hotel_t( 'forms_mail_notice' ), 'subject' => sazanami_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

