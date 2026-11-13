<?php
/**
 * Title: Home: counter letter
 * Slug: noka-cheese/front-letter
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Willow band with the monthly letter and the newsletter form slot.
 */
?>
<!-- wp:group {"className":"nk-sec nk-letter","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-letter"><!-- wp:group {"className":"nk-row nk-row--letter","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--letter"><!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'lt_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'lt_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nk-body"} -->
<p class="nk-body"><?php echo wp_kses_post( noka_cheese_t( 'lt_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text nk-cell--form","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text nk-cell--form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'counter@nokacheese.example',
	'label'   => noka_cheese_t( 'forms_email' ),
	'submit'  => noka_cheese_t( 'forms_subscribe' ),
	'notice'  => noka_cheese_t( 'forms_mail_notice' ),
	'subject' => noka_cheese_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
