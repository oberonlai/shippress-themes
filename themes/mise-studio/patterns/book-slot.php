<?php
/**
 * Title: Booking form slot
 * Slug: mise-studio/book-slot
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: The booking form: a Contact Form 7 or WPForms form when one is active, otherwise the email button that opens the mail app.
 */
?>
<?php
ob_start();
?>
<div class="wp-block-buttons ms-pill-wrap"><div class="wp-block-button ms-pill ms-pill--lg"><a class="wp-block-button__link wp-element-button" href="mailto:hello@mise-studio.example?subject=<?php echo esc_attr( rawurlencode( mise_studio_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( mise_studio_t( 'booking_email' ) ); ?></a></div></div>
<?php
$mise_studio_fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $mise_studio_fallback,
	)
);
?>
