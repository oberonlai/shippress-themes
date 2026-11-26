<?php
/**
 * Title: Page: contact
 * Slug: kodou-charging/page-contact
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Request a site assessment: the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--page">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'contact_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap">
<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:visits@kodou-charging.example?subject=Site%20assessment%20request"><?php echo esc_html( kodou_charging_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-note"} -->
<p class="kc-note"><?php echo esc_html( kodou_charging_t( 'contact_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
