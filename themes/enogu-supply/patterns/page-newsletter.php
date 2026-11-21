<?php
/**
 * Title: Page: newsletter
 * Slug: enogu-supply/page-newsletter
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: The standalone newsletter page: vertical tagline, what the letter is, and the newsletter form slot.
 */
?>
<!-- wp:group {"className":"en-sec en-page","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group en-sec en-page">
<!-- wp:group {"className":"en-col","layout":{"type":"default"}} -->
<div class="wp-block-group en-col">
<!-- wp:group {"className":"en-tagline","layout":{"type":"default"}} -->
<div class="wp-block-group en-tagline">
<!-- wp:paragraph {"className":"en-tagline__t"} -->
<p class="en-tagline__t"><?php echo enogu_supply_lines( 'tagline' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-title-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'nl_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-inner-lede"} -->
<p class="en-inner-lede"><?php echo esc_html( enogu_supply_t( 'nl_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-inner-lede"} -->
<p class="en-inner-lede"><?php echo esc_html( enogu_supply_t( 'nl_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"en-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group en-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@enogu-supply.example', 'label' => enogu_supply_t( 'forms_email' ), 'submit' => enogu_supply_t( 'forms_subscribe' ), 'notice' => enogu_supply_t( 'forms_mail_notice' ), 'subject' => enogu_supply_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
