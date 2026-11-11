<?php
/**
 * Title: Request form slot
 * Slug: kashidashi-hire/contact-slot
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: The hire request form: a Contact Form 7 or WPForms form when one is active, otherwise the mailto button to the hire desk.
 */
?>
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"kh-mailto"} -->
<div class="wp-block-buttons kh-mailto"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hire@kashidashi-hire.example?subject=<?php echo rawurlencode( kashidashi_hire_t( 'forms_mail_subject_contact' ) ); ?>"><?php echo esc_html( kashidashi_hire_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $fallback,
	)
);
?>
