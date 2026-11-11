<?php
/**
 * Title: Visit form slot
 * Slug: tana-furniture/visit-slot
 * Categories: tana-furniture
 * Inserter: no
 * Description: The visit booking form: a Contact Form 7 or WPForms form when one is active, otherwise a mailto button with a subject line.
 */
?>
<?php
ob_start();
?>
<a class="wp-element-button" href="mailto:hello@tanafurniture.example?subject=<?php echo rawurlencode( tana_furniture_t( 'visit_mail_subject' ) ); ?>"><?php echo esc_html( tana_furniture_t( 'visit_email_button' ) ); ?></a>
<?php
$sp_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $sp_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?>
