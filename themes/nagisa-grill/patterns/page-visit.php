<?php
/**
 * Title: Visit: address and contact form slot
 * Slug: nagisa-grill/page-visit
 * Categories: nagisa-grill
 * Inserter: no
 */
ob_start();
?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:table@nagisagrill.example"><?php echo esc_html( nagisa_grill_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
?>
<!-- wp:paragraph -->
<p>Nagisa Grill is at 7 Harbour Row, Port Ellery. Open Wednesday to Sunday: bar from 17:30, seatings at 18:00 and 20:30, last order 22:00, doors close 23:00. Take the harbour tram to the Harbour Row stop; the quay is a four-minute walk.</p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?>
