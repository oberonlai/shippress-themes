<?php
/**
 * Title: Footer: agency name, notes, links, office details and the base line
 * Slug: nami-staffing/footer-main
 * Categories: nami-staffing
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the agency name and line, the notes blurb, the page links, the synced office details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"ns-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull ns-foot"><!-- wp:group {"align":"wide","className":"ns-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-foot__grid"><!-- wp:group {"className":"ns-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ns-foot__brand"><!-- wp:paragraph {"className":"ns-foot__mark"} -->
<p class="ns-foot__mark"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ns-foot__line"} -->
<p class="ns-foot__line"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ns-foot__letter"} -->
<p class="ns-foot__letter"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group ns-foot__links"><!-- wp:paragraph {"className":"ns-foot__kicker"} -->
<p class="ns-foot__kicker"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ns-foot__list"} -->
<p class="ns-foot__list"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group ns-foot__school"><!-- wp:pattern {"slug":"nami-staffing/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ns-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-foot__base"><!-- wp:paragraph {"className":"ns-foot__legal"} -->
<p class="ns-foot__legal"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ns-foot__legal"} -->
<p class="ns-foot__legal"><?php echo wp_kses_post( nami_staffing_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
