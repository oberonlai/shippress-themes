<?php
/**
 * Title: Home: Room Tone letter
 * Slug: kodama-sound/letter
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: The monthly letter on a tinted band with the shared newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-letter kd-t","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-letter kd-t"><!-- wp:group {"className":"kd-wide kd-let","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide kd-let"><!-- wp:group {"className":"kd-let__l","layout":{"type":"default"}} -->
<div class="wp-block-group kd-let__l"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--s"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--s"><?php echo esc_html( kodama_sound_t( 'lt_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-tx"} -->
<p class="kd-tx"><?php echo esc_html( kodama_sound_t( 'lt_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-let__r","layout":{"type":"default"}} -->
<div class="wp-block-group kd-let__r"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@kodama-sound.example',
	'label'   => kodama_sound_t( 'forms_email' ),
	'submit'  => kodama_sound_t( 'forms_subscribe' ),
	'notice'  => kodama_sound_t( 'forms_mail_notice' ),
	'subject' => kodama_sound_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
