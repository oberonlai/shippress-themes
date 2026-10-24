<?php
/**
 * Title: Home: list prices
 * Slug: seiwa-furniture/front-prices
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A full-width price table on a mist band: item, what is included, price.
 */
$sw_body = '';
for ( $i = 1; $i <= 7; $i++ ) {
	$sw_body .= '<tr><td>' . sw_t( "pr{$i}_i" ) . '</td><td>' . sw_t( "pr{$i}_d" ) . '</td><td>' . sw_t( "pr{$i}_p" ) . '</td></tr>';
}
$sw_table = '<!-- wp:table {"className":"sw-price"} -->
<figure class="wp-block-table sw-price"><table><thead><tr><th>' . sw_t( 'th_item' ) . '</th><th>' . sw_t( 'th_inc' ) . '</th><th>' . sw_t( 'th_price' ) . '</th></tr></thead><tbody>' . $sw_body . '</tbody></table></figure>
<!-- /wp:table -->

';
echo sw_group( 'sw-sec sw-band sw-prices', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap', sw_label( 'price_label', 'price_cap' ) . $sw_table . sw_p( 'sw-foot-note', sw_t( 'price_foot' ) ) ),
'section' );
