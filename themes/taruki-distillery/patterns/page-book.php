<?php
/**
 * Title: Booking and contact form
 * Slug: taruki-distillery/page-book
 * Categories: taruki-distillery
 * Inserter: no
 * Description: The contact form slot with a mailto button as the fallback; used on the booking and contact pages.
 */
?>
<!-- wp:group {"className":"td-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group td-letter__form"><?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:hello@taruki-distillery.example"><?php echo esc_html( taruki_t( 'contact_email' ) ); ?></a>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot(
	array(
		'kind'     => 'contact',
		'fallback' => $fallback,
	)
);
?></div>
<!-- /wp:group -->
