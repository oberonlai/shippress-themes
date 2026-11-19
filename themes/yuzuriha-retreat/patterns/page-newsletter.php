<?php
/**
 * Title: Newsletter: a standalone subscribe panel
 * Slug: yuzuriha-retreat/page-newsletter
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Lede and a dark panel holding the newsletter form slot: an email field and a subscribe button that open the mail app without a newsletter plugin.
 */
?>
<!-- wp:group {"className":"yr-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagebody"><!-- wp:paragraph {"className":"yr-intro"} -->
<p class="yr-intro"><?php echo esc_html( yuzuriha_retreat_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-panel yr-panel--dark","layout":{"type":"default"}} -->
<div class="wp-block-group yr-panel yr-panel--dark"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@yuzuriha.example', 'label' => yuzuriha_retreat_t( 'forms_email' ), 'submit' => yuzuriha_retreat_t( 'forms_subscribe' ), 'notice' => yuzuriha_retreat_t( 'forms_mail_notice' ), 'subject' => yuzuriha_retreat_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
