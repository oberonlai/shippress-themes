<?php
/**
 * Title: Home: monthly fees table
 * Slug: hidamari-care/fees-table
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: Monthly fees by room type and care level in a hairline table with small-print notes.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-fees","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-fees"><!-- wp:group {"className":"hc-fees__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fees__head"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'fee_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'fee_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"hc-fees__table"} -->
<figure class="wp-block-table hc-fees__table"><table><thead><tr><th><?php echo esc_html( hidamari_care_t( 'fee_col_room' ) ); ?></th><th><?php echo esc_html( hidamari_care_t( 'c1_t' ) ); ?></th><th><?php echo esc_html( hidamari_care_t( 'c2_t' ) ); ?></th><th><?php echo esc_html( hidamari_care_t( 'c3_t' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( hidamari_care_t( 'fr1' ) ); ?></th><td><?php echo esc_html( hidamari_care_t( 'f11' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f12' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f13' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hidamari_care_t( 'fr2' ) ); ?></th><td><?php echo esc_html( hidamari_care_t( 'f21' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f22' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f23' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( hidamari_care_t( 'fr3' ) ); ?></th><td><?php echo esc_html( hidamari_care_t( 'f31' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f32' ) ); ?></td><td><?php echo esc_html( hidamari_care_t( 'f33' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"hc-fees__note"} -->
<p class="hc-fees__note"><?php echo esc_html( hidamari_care_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
