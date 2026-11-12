<?php
/**
 * Title: Page: Set your schedule
 * Slug: meguri-waste/page-contact
 * Categories: meguri-waste
 * Keywords: page-contact
 * Description: Inner page: contact lead and the contact form slot (a form plugin when active, otherwise a mailto button).
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-lead"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'pg_contact_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pg_contact_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-form-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-form-sec"><!-- wp:group {"className":"mw-wrap mw-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-form-wrap"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'pg_contact_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"mw-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group mw-form-slot"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="mailto:desk@meguri-waste.example"><?php echo esc_html( meguri_waste_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
