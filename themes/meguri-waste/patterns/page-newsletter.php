<?php
/**
 * Title: Page: Collection notes
 * Slug: meguri-waste/page-newsletter
 * Categories: meguri-waste
 * Keywords: page-newsletter
 * Description: Inner page: waitlist for route-day alerts with the newsletter form slot.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-lead"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'pg_newsletter_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pg_newsletter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-form-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-form-sec"><!-- wp:group {"className":"mw-wrap mw-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-form-wrap"><!-- wp:group {"className":"mw-notes__form","layout":{"type":"default"}} -->
<div class="wp-block-group mw-notes__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@meguri-waste.example', 'label' => meguri_waste_t( 'forms_email' ), 'submit' => meguri_waste_t( 'forms_subscribe' ), 'notice' => meguri_waste_t( 'forms_mail_notice' ), 'subject' => meguri_waste_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
