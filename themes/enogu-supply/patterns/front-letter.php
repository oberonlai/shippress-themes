<?php
/**
 * Title: Home: the Thursday letter
 * Slug: enogu-supply/front-letter
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Pale grey band with the letter description and the newsletter form slot.
 */
?>
<!-- wp:group {"className":"en-sec en-letter","tagName":"section","anchor":"letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group en-sec en-letter">
<!-- wp:group {"className":"en-col","layout":{"type":"default"}} -->
<div class="wp-block-group en-col">
<!-- wp:group {"className":"en-title-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'letter_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-letter__p"} -->
<p class="en-letter__p"><?php echo esc_html( enogu_supply_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"en-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group en-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@enogu-supply.example', 'label' => enogu_supply_t( 'forms_email' ), 'submit' => enogu_supply_t( 'forms_subscribe' ), 'notice' => enogu_supply_t( 'forms_mail_notice' ), 'subject' => enogu_supply_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
