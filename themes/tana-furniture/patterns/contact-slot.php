<?php
/**
 * Title: Contact form slot
 * Slug: tana-furniture/contact-slot
 * Categories: tana-furniture
 * Inserter: no
 * Description: The contact form: a Contact Form 7 or WPForms form when one is active, otherwise a mailto button.
 */
?>
<?php
ob_start();
?>
<a class="wp-element-button" href="mailto:hello@tanafurniture.example"><?php echo esc_html( tana_furniture_t( 'contact_email_button' ) ); ?></a>
<?php
$sp_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $sp_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?>
