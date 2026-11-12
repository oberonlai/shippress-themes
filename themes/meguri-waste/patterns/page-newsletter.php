<?php
/**
 * Title: Page: Collection notes
 * Slug: meguri-waste/page-newsletter
 * Categories: meguri-waste
 * Description: Inner page: waitlist for route-day alerts with the newsletter form slot (email field and submit, mailto fallback without a plugin).
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-wash mw-wash--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-wash mw-wash--lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p17' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'pg_newsletter_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pg_newsletter_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'nl_h0' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'nl_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-form-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-form-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap mw-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-form-wrap"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'nl_h1' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose mw-after"} -->
<p class="mw-prose mw-after"><?php echo esc_html( meguri_waste_t( 'nl_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-notes__form","layout":{"type":"default"}} -->
<div class="wp-block-group mw-notes__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@meguri-waste.example', 'label' => meguri_waste_t( 'forms_email' ), 'submit' => meguri_waste_t( 'forms_subscribe' ), 'notice' => meguri_waste_t( 'forms_mail_notice' ), 'subject' => meguri_waste_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
