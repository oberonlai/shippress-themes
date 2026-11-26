<?php
/**
 * Title: Home: monthly letter panel
 * Slug: kaoru-cocoa/front-letter
 * Categories: kaoru-cocoa
 * Keywords: newsletter, form, letter
 * Viewport Width: 1440
 * Description: A pale panel with the monthly letter headline on the left and the newsletter form slot (email and subscribe, working without any plugin) on the right.
 */
?>
<!-- wp:group {"align":"full","anchor":"letter","className":"kc-letter","layout":{"type":"default"}} -->
<div id="letter" class="wp-block-group alignfull kc-letter"><!-- wp:group {"className":"kc-letter__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__panel"><!-- wp:group {"className":"kc-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__text"><!-- wp:heading {"level":2,"className":"kc-letter__title"} -->
<h2 class="wp-block-heading kc-letter__title"><?php echo esc_html( kaoru_cocoa_t( 'letter_heading' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo esc_html( kaoru_cocoa_t( 'letter_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kaoru-cocoa.example',
	'label'   => kaoru_cocoa_t( 'forms_email' ),
	'submit'  => kaoru_cocoa_t( 'forms_subscribe' ),
	'notice'  => kaoru_cocoa_t( 'forms_mail_notice' ),
	'subject' => kaoru_cocoa_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
