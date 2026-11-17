<?php
/**
 * Title: Home: The Itinerary (newsletter)
 * Slug: hobi-journeys/front-itinerary
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: Light newsletter case with the shared newsletter form slot; no reveal.
 */
?>
<!-- wp:group {"className":"hj-section hj-lines hj-itinerary hj-grey","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-itinerary hj-grey"><!-- wp:group {"className":"hj-itinerary__in","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itinerary__in"><!-- wp:group {"className":"hj-itinerary__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itinerary__txt"><!-- wp:heading {"level":2,"className":"hj-h2"} -->
<h2 class="wp-block-heading hj-h2"><?php echo wp_kses_post( hobi_journeys_t( 'k67ff701c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph  -->
<p><?php echo wp_kses_post( hobi_journeys_t( 'kf65d3217' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-itinerary__form","layout":{"type":"default"}} -->
<div class="wp-block-group hj-itinerary__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@hobi-journeys.example',
	'label'   => hobi_journeys_t( 'forms_email' ),
	'submit'  => hobi_journeys_t( 'forms_subscribe' ),
	'notice'  => hobi_journeys_t( 'forms_mail_notice' ),
	'subject' => hobi_journeys_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
