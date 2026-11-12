<?php
/**
 * Title: Inner: contact the fair office
 * Slug: kikai-fair/inner-contact
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Contact the fair office</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The fair office answers visitor, exhibitor and press questions on weekdays from 09:00 to 17:00. For pass requests and the floor plan, use the early-access list on the <a href="/newsletter/">newsletter page</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@kikaifair.example"><?php echo esc_html( kikai_fair_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
<!-- /wp:html -->
