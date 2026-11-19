<?php
/**
 * Title: Prices: the six items side by side
 * Slug: sumibi-yakiniku/prices
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: A white section with one price table in the 1080px column: course, what is on the grill, and the price per guest, with one note under it. No reveal on the table.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-prices","layout":{"type":"default"}} -->
<section class="wp-block-group sy-prices" id="prices"><!-- wp:paragraph {"className":"sy-label sy-label--l sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--l sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'prices_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'prices_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false,"className":"sy-ptable"} -->
<figure class="wp-block-table sy-ptable"><table><thead><tr><th><?php echo esc_html( sumibi_yakiniku_t( 'prices_th1' ) ); ?></th><th><?php echo esc_html( sumibi_yakiniku_t( 'prices_th2' ) ); ?></th><th><?php echo esc_html( sumibi_yakiniku_t( 'prices_th3' ) ); ?></th></tr></thead><tbody>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr1_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr1_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr1_price' ) ); ?></td></tr>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr2_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr2_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr2_price' ) ); ?></td></tr>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr3_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr3_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr3_price' ) ); ?></td></tr>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr4_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr4_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr4_price' ) ); ?></td></tr>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr5_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr5_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr5_price' ) ); ?></td></tr>
<tr><td><?php echo esc_html( sumibi_yakiniku_t( 'pr6_name' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr6_note' ) ); ?></td><td><?php echo esc_html( sumibi_yakiniku_t( 'pr6_price' ) ); ?></td></tr>
</tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sy-note"} -->
<p class="sy-note"><?php echo esc_html( sumibi_yakiniku_t( 'prices_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
