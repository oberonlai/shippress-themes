<?php
/**
 * Title: Home: seven fees
 * Slug: kantei-valuers/front-fees
 * Categories: kantei-valuers
 * Keywords: fees, price table
 * Viewport Width: 1440
 * Description: Pale band with a heading, a full-width seven-row fee table (EUR, excluding VAT), four one-line notes and an outline pill to all fees and terms.
 */
$e = 'kantei_valuers_e';
$l = 'kantei_valuers_lines';
$rows = '';
for ( $n = 1; $n <= 7; $n++ ) {
	$rows .= '<tr><td data-label="' . esc_attr( kantei_valuers_t( 'th_no' ) ) . '">' . $n . '</td><td><span class="kv-l">' . $e( 'th_ins' ) . ': </span>' . $e( "f{$n}_ins" ) . '</td><td><span class="kv-l">' . $e( 'th_get' ) . ': </span>' . $e( "f{$n}_get" ) . '</td><td class="kv-fee"><span class="kv-l">' . $e( 'th_fee' ) . ': </span>' . $e( "f{$n}_fee" ) . '</td></tr>';
}
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"fees","className":"kv-sec kv-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull kv-sec kv-fees"><!-- wp:group {"className":"kv-fees__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-fees__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo $e( 'fees_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $l( 'fees_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo $e( 'fees_intro' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"kv-table"} -->
<figure class="wp-block-table kv-table"><table><thead><tr><th><?php echo $e( 'th_no' ); ?></th><th><?php echo $e( 'th_ins' ); ?></th><th><?php echo $e( 'th_get' ); ?></th><th class="kv-fee"><?php echo $e( 'th_fee' ); ?></th></tr></thead><tbody><?php echo $rows; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:list {"className":"kv-notes"} -->
<ul class="wp-block-list kv-notes"><?php for ( $n = 1; $n <= 4; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "fn{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-pill"} -->
<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo $e( 'fees_more' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
