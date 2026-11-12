<?php
/**
 * Title: Contact form slot
 * Slug: homura-safety/contact-slot
 * Categories: homura-safety
 * Inserter: no
 * Description: The contact form: a Contact Form 7 or WPForms form when one is active, otherwise a button that opens the mail app.
 */
?>
<?php
ob_start();
?>
<div class="wp-block-buttons"><div class="wp-block-button hs-btn hs-btn--arrow"><a class="wp-block-button__link wp-element-button" href="mailto:hello@homura-safety.example?subject=<?php echo esc_attr( rawurlencode( homura_safety_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( homura_safety_t( 'contact_email' ) ); ?></a></div></div>
<?php
$homura_safety_fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $homura_safety_fallback,
	)
);
?>
