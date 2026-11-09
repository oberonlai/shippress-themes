<?php
/**
 * Title: Home: fees
 * Slug: yanagi-hygiene/front-fees
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Seven prices in a full-width table, prices right-aligned.
 */
?>
<?php
$rows = '';
for ( $i = 1; $i <= 7; $i++ ) {
	$rows .= '<tr><td>' . esc_html( yh_t( "fee{$i}_n" ) ) . '<br><span class="yh-fee__d">' . esc_html( yh_t( "fee{$i}_d" ) ) . '</span></td><td class="yh-fee__p">' . esc_html( yh_t( "fee{$i}_p" ) ) . '</td></tr>';
}
?>
<!-- wp:group {"anchor":"fees","align":"full","className":"yh-sec yh-fees","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-fees" id="fees"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'fee_t' ), yh_t( 'fee_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:table {"className":"yh-feetable"} -->
<figure class="wp-block-table yh-feetable"><table><thead><tr><th><?php echo esc_html( yh_t( 'fee_h1' ) ); ?></th><th class="yh-fee__p"><?php echo esc_html( yh_t( 'fee_h2' ) ); ?></th></tr></thead><tbody><?php echo $rows; // phpcs:ignore WordPress.Security.EscapeOutput ?></tbody></table></figure>
<!-- /wp:table --><!-- wp:paragraph {"className":"yh-fee__note"} -->
<p class="yh-fee__note"><?php echo esc_html( yh_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
