<?php
/**
 * Title: Home: fixed fees in one table
 * Slug: hatsumei-patent/front-fees
 * Categories: hatsumei-patent
 * Keywords: fees, prices, table
 * Viewport Width: 1440
 * Description: A short narrative about fixed fees beside one plain two-column table of services and fees, with a note on official office fees.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-fees"><!-- wp:group {"className":"hp-fees__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-fees__grid"><!-- wp:group {"className":"hp-fees__side","layout":{"type":"default"}} -->
<div class="wp-block-group hp-fees__side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hp-after"} -->
<div class="wp-block-buttons hp-after"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"hp-fees__table"} -->
<figure class="wp-block-table hp-fees__table"><table><thead><tr><th><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_h1' ) ); ?></th><th><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_h2' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s1' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p1' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s2' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p2' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s3' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p3' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s4' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p4' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s5' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p5' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s6' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p6' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_s7' ) ); ?></td><td><?php echo wp_kses_post( hatsumei_patent_t( 'front_fee_p7' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
