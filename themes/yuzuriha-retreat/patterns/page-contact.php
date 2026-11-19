<?php
/**
 * Title: Contact: desk details and the contact form slot
 * Slug: yuzuriha-retreat/page-contact
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Lede, contact details and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"className":"yr-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagebody"><!-- wp:paragraph {"className":"yr-intro"} -->
<p class="yr-intro"><?php echo esc_html( yuzuriha_retreat_t( 'contact_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-note"} -->
<p class="yr-note"><a href="tel:+00445550186">+00 44 555 0186</a><br><a href="mailto:stay@yuzuriha.example">stay@yuzuriha.example</a><br><?php echo yuzuriha_retreat_lines( 'foot_address' ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yr-pillbtn"} -->
<div class="wp-block-button yr-pillbtn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@yuzuriha.example?subject=' . rawurlencode( yuzuriha_retreat_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'forms_contact_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->
