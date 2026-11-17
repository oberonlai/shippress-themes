<?php
/**
 * Title: Home: The Pot Letter
 * Slug: kosame-hotpot/letter
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: A dark newsletter section: heading and note on the left, the shippress newsletter slot (email field and submit even without a plugin) on the right.
 */
?>
<!-- wp:group {"anchor":"letter","tagName":"section","className":"ks-letter ks-dark","layout":{"type":"default"},"align":"full"} -->
<section id="letter" class="wp-block-group alignfull ks-letter ks-dark"><!-- wp:group {"className":"ks-letter__in","layout":{"type":"default"}} -->
<div class="wp-block-group ks-letter__in"><!-- wp:group {"className":"ks-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-letter__text"><!-- wp:heading {"level":2,"className":"ks-letter__title"} -->
<h2 class="wp-block-heading ks-letter__title"><?php echo esc_html( kosame_hotpot_t( 'letter_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-letter__p"} -->
<p class="ks-letter__p"><?php echo esc_html( kosame_hotpot_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-letter__slot","layout":{"type":"default"}} -->
<div class="wp-block-group ks-letter__slot"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'table@kosame-hotpot.example',
	'label'   => kosame_hotpot_t( 'forms_email' ),
	'submit'  => kosame_hotpot_t( 'forms_subscribe' ),
	'notice'  => kosame_hotpot_t( 'forms_mail_notice' ),
	'subject' => kosame_hotpot_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
