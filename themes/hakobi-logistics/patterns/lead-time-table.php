<?php
/**
 * Title: Home: lead-time table
 * Slug: hakobi-logistics/lead-time-table
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: Origin region by destination region delivery days in a hairline table, the heading and note on the left.
 */
?>
<!-- wp:group {"tagName":"section","className":"hg-lead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hg-lead"><!-- wp:group {"className":"hg-lead__head","layout":{"type":"default"}} -->
<div class="wp-block-group hg-lead__head"><!-- wp:paragraph {"className":"hg-eyebrow"} -->
<p class="hg-eyebrow"><?php echo esc_html( hakobi_logistics_t( 'lt_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hg-sec__title"} -->
<h2 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'lt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-lead__note"} -->
<p class="hg-lead__note"><?php echo esc_html( hakobi_logistics_t( 'lt_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"hg-lead__table"} -->
<figure class="wp-block-table hg-lead__table"><table><thead><tr><th><?php echo esc_html( hakobi_logistics_t( 'lt_from' ) ); ?></th><th><?php echo esc_html( hakobi_logistics_t( 'reg1' ) ); ?></th><th><?php echo esc_html( hakobi_logistics_t( 'reg2' ) ); ?></th><th><?php echo esc_html( hakobi_logistics_t( 'reg3' ) ); ?></th><th><?php echo esc_html( hakobi_logistics_t( 'reg4' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( hakobi_logistics_t( 'reg1' ) ); ?></th><td><?php echo esc_html( hakobi_logistics_t( 'day_same' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_2' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakobi_logistics_t( 'reg2' ) ); ?></th><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_same' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_2' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakobi_logistics_t( 'reg3' ) ); ?></th><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_same' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hakobi_logistics_t( 'reg4' ) ); ?></th><td><?php echo esc_html( hakobi_logistics_t( 'day_2' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_2' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_next' ) ); ?></td><td><?php echo esc_html( hakobi_logistics_t( 'day_same' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->
