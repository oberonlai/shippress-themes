<?php
/**
 * Title: Contact form slot
 * Slug: tsubasa-college/contact-slot
 * Categories: tsubasa-college
 * Inserter: no
 * Description: The contact form: a Contact Form 7 or WPForms form when one is active, otherwise a button that opens the mail app.
 */
?>
<?php
ob_start();
?>
<div class="wp-block-buttons"><div class="wp-block-button tc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:admissions@tsubasa-college.example?subject=<?php echo esc_attr( rawurlencode( tsubasa_college_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( tsubasa_college_t( 'contact_email' ) ); ?></a></div></div>
<?php
$tsubasa_college_fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $tsubasa_college_fallback,
	)
);
?>
