<?php
/**
 * Title: Footer: company name, letter, links, company details and the base line
 * Slug: hagane-machinery/footer-main
 * Categories: hagane-machinery
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The deep graphite footer: the company name and line, the newsletter note, the page links, the synced company details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"hm-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull hm-foot"><!-- wp:group {"align":"wide","className":"hm-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-foot__grid"><!-- wp:group {"className":"hm-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hm-foot__brand"><!-- wp:paragraph {"className":"hm-foot__mark"} -->
<p class="hm-foot__mark"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-foot__line"} -->
<p class="hm-foot__line"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-foot__letter"} -->
<p class="hm-foot__letter"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group hm-foot__links"><!-- wp:paragraph {"className":"hm-foot__kicker"} -->
<p class="hm-foot__kicker"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-foot__list"} -->
<p class="hm-foot__list"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group hm-foot__school"><!-- wp:pattern {"slug":"hagane-machinery/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hm-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-foot__base"><!-- wp:paragraph {"className":"hm-foot__legal"} -->
<p class="hm-foot__legal"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-foot__legal"} -->
<p class="hm-foot__legal"><?php echo wp_kses_post( hagane_machinery_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
