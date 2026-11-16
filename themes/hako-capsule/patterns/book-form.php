<?php
/**
 * Title: Book: request slot
 * Slug: hako-capsule/book-form
 * Categories: hako-capsule
 * Keywords: capsule hotel, booking, contact
 * Viewport Width: 1440
 * Inserter: no
 * Description: The contact slot: Contact Form 7 or WPForms when active, otherwise a mail button with a short note.
 */
?>
<!-- wp:group {"className":"hk-bookform","layout":{"type":"default"}} -->
<div class="wp-block-group hk-bookform"><?php
ob_start(); ?>
<a class="wp-element-button hk-mailbtn" href="mailto:<?php echo esc_attr( hako_capsule_t( 'foot_mail' ) ); ?>?subject=<?php echo esc_attr( rawurlencode( hako_capsule_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( hako_capsule_t( 'contact_email' ) ); ?></a>
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'forms_contact_note' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->
