<?php
/**
 * Title: Booking form slot
 * Slug: sazanami-hotel/booking-form
 * Categories: sazanami-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The stay request form: the first published CF7 or WPForms form when a plugin is active, otherwise the Email us your dates button.
 */
?>
<!-- wp:group {"className":"sz-form-slot sz-form-slot--light","layout":{"type":"default"}} -->
<div class="wp-block-group sz-form-slot sz-form-slot--light"><?php
ob_start(); ?>
<div class="wp-block-buttons sz-btns sz-pill"><div class="wp-block-button is-style-outline sz-pill"><a class="wp-block-button__link wp-element-button" href="mailto:stay@sazanami-hotel.example?subject=<?php echo esc_attr( rawurlencode( sazanami_hotel_t( 'booking_subject' ) ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'booking_email' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->
