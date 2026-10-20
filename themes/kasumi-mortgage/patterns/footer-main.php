<?php
/**
 * Title: Footer: school name, letter, links, school details and the base line
 * Slug: kasumi-mortgage/footer-main
 * Categories: kasumi-mortgage
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The deep slate footer: the school name and line, the newsletter note, the page links, the synced school details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"km-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull km-foot"><!-- wp:group {"align":"wide","className":"km-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-foot__grid"><!-- wp:group {"className":"km-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group km-foot__brand"><!-- wp:paragraph {"className":"km-foot__mark"} -->
<p class="km-foot__mark"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-foot__line"} -->
<p class="km-foot__line"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-foot__letter"} -->
<p class="km-foot__letter"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group km-foot__links"><!-- wp:paragraph {"className":"km-foot__kicker"} -->
<p class="km-foot__kicker"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-foot__list"} -->
<p class="km-foot__list"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group km-foot__school"><!-- wp:pattern {"slug":"kasumi-mortgage/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"km-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-foot__base"><!-- wp:paragraph {"className":"km-foot__legal"} -->
<p class="km-foot__legal"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-foot__legal"} -->
<p class="km-foot__legal"><?php echo wp_kses_post( kasumi_mortgage_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
