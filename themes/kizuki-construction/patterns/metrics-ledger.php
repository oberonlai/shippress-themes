<?php
/**
 * Title: Home: the metrics ledger
 * Slug: kizuki-construction/metrics-ledger
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: A full navy field with six ledger rows in one reading column: a 72px figure, what it measures, the year and a note.
 */
?>
<!-- wp:group {"tagName":"section","className":"kz-ledger","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-ledger"><!-- wp:group {"className":"kz-ledger__head","layout":{"type":"default"}} -->
<div class="wp-block-group kz-ledger__head"><!-- wp:paragraph {"className":"kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kizuki_construction_t( 'lg_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'lg_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="kz-ledger__table"><thead><tr><th scope="col"><?php echo esc_html( kizuki_construction_t( 'lg_col_n' ) ); ?></th><th scope="col"><?php echo esc_html( kizuki_construction_t( 'lg_col_what' ) ); ?></th><th scope="col"><?php echo esc_html( kizuki_construction_t( 'lg_col_y' ) ); ?></th><th scope="col"><?php echo esc_html( kizuki_construction_t( 'lg_col_note' ) ); ?></th></tr></thead><tbody><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm1_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm1_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm1_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm1_note' ) ); ?></td></tr><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm2_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm2_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm2_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm2_note' ) ); ?></td></tr><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm3_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm3_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm3_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm3_note' ) ); ?></td></tr><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm4_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm4_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm4_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm4_note' ) ); ?></td></tr><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm5_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm5_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm5_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm5_note' ) ); ?></td></tr><tr><td class="kz-ledger__n"><?php echo esc_html( kizuki_construction_t( 'm6_n' ) ); ?></td><th scope="row"><?php echo esc_html( kizuki_construction_t( 'm6_w' ) ); ?></th><td class="kz-ledger__y"><?php echo esc_html( kizuki_construction_t( 'm6_y' ) ); ?></td><td class="kz-ledger__note"><?php echo esc_html( kizuki_construction_t( 'm6_note' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></section>
<!-- /wp:group -->
