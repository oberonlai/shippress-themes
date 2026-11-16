<?php
/**
 * Title: Home: the Route Letter
 * Slug: futari-journeys/front-letter
 * Categories: futari-journeys
 * Viewport Width: 1440
 * Description: Newsletter section with the shared form slot.
 */
?>
<!-- wp:group {"className":"fj-section fj-letter","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull fj-section fj-letter"><!-- wp:group {"className":"fj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fj-narrow"><!-- wp:columns {"className":"fj-letter__cols"} -->
<div class="wp-block-columns fj-letter__cols"><!-- wp:column {"width":"41.667%"} -->
<div class="wp-block-column" style="flex-basis:41.667%"><!-- wp:group {"className":"fj-eyebrow-row","layout":{"type":"default"}} -->
<div class="wp-block-group fj-eyebrow-row"><!-- wp:paragraph {"className":"fj-eyebrow"} -->
<p class="fj-eyebrow"><?php echo wp_kses_post( futari_journeys_t( 'k6d2a1f4b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"fj-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"fj-h3"} -->
<h3 class="wp-block-heading fj-h3"><?php echo wp_kses_post( futari_journeys_t( 'k04b0ad54' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( futari_journeys_t( 'kd14c935d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58.333%"} -->
<div class="wp-block-column" style="flex-basis:58.333%"><!-- wp:group {"className":"fj-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group fj-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@futari-journeys.example',
	'label'   => futari_journeys_t( 'forms_email' ),
	'submit'  => futari_journeys_t( 'forms_subscribe' ),
	'notice'  => futari_journeys_t( 'forms_mail_notice' ),
	'subject' => futari_journeys_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
