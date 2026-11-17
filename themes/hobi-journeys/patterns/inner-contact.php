<?php
/**
 * Title: Contact: office facts and the contact form slot
 * Slug: hobi-journeys/inner-contact
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: Facts of the office on the left, the shared contact form slot on a light-grey panel on the right.
 */
?>
<!-- wp:group {"className":"hj-section hj-lines hj-contactsec","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-contactsec"><!-- wp:group {"className":"hj-narrow hj-contact","layout":{"type":"default"}} -->
<div class="wp-block-group hj-narrow hj-contact"><!-- wp:group {"className":"hj-contact__facts","layout":{"type":"default"}} -->
<div class="wp-block-group hj-contact__facts"><!-- wp:heading {"level":2,"className":"hj-h2"} -->
<h2 class="wp-block-heading hj-h2">Harbour House</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hj-rows hj-rows--facts","layout":{"type":"default"}} -->
<div class="wp-block-group hj-rows hj-rows--facts"><!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Address</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">Harbour House, 9 Wharf Lane, Port Arden</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Office hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">Monday to Friday, 08:30–18:00. Closed weekends and public holidays.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Phone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">+44 1632 960 418</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">New programmes</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">brief@hobi-journeys.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">General</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">hello@hobi-journeys.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-row","layout":{"type":"default"}} -->
<div class="wp-block-group hj-row"><!-- wp:paragraph {"className":"hj-row__k"} -->
<p class="hj-row__k">Duty line</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hj-row__v"} -->
<p class="hj-row__v">24 hours, for every programme while a group is travelling.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hj-contact__form"><!-- wp:paragraph {"className":"hj-form__label"} -->
<p class="hj-form__label">Write to us</p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<!-- wp:buttons {"className":"hj-form__btn"} -->
<div class="wp-block-buttons hj-form__btn"><!-- wp:button {"className":"hj-btn"} -->
<div class="wp-block-button hj-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@hobi-journeys.example?subject=<?php echo esc_attr( rawurlencode( hobi_journeys_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( hobi_journeys_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hj-form-hint"} -->
<p class="hj-form-hint"><?php echo esc_html( hobi_journeys_t( 'forms_contact_hint' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
