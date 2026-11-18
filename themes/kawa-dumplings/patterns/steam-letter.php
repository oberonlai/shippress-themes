<?php
/**
 * Title: Home: steam letter
 * Slug: kawa-dumplings/steam-letter
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: Newsletter ticket with the shared form slot (works without a plugin).
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-letter","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-letter"><!-- wp:group {"className":"kd-letter__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kd-letter__wrap"><!-- wp:group {"className":"kd-ticket kd-letter__box","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ticket kd-letter__box"><!-- wp:paragraph {"className":"kd-ticket__pill"} -->
<p class="kd-ticket__pill"><?php echo esc_html( kawa_dumplings_t( 'sl_pill' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kd-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kd-rows"><!-- wp:paragraph {"className":"kd-row"} -->
<p class="kd-row"><?php echo esc_html( kawa_dumplings_t( 'sl_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-row"} -->
<p class="kd-row"><?php echo esc_html( kawa_dumplings_t( 'sl_r2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kd-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kawa-dumplings.example',
	'label'   => kawa_dumplings_t( 'forms_email' ),
	'submit'  => kawa_dumplings_t( 'forms_subscribe' ),
	'notice'  => kawa_dumplings_t( 'forms_mail_notice' ),
	'subject' => kawa_dumplings_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
