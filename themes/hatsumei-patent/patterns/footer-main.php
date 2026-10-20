<?php
/**
 * Title: Footer: firm name, notes, links, office details and the base line
 * Slug: hatsumei-patent/footer-main
 * Categories: hatsumei-patent
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the firm name and line, the notes blurb, the page links, the synced office details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"hp-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull hp-foot"><!-- wp:group {"align":"wide","className":"hp-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-foot__grid"><!-- wp:group {"className":"hp-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot__brand"><!-- wp:paragraph {"className":"hp-foot__mark"} -->
<p class="hp-foot__mark"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-foot__line"} -->
<p class="hp-foot__line"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-foot__letter"} -->
<p class="hp-foot__letter"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot__links"><!-- wp:paragraph {"className":"hp-foot__kicker"} -->
<p class="hp-foot__kicker"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-foot__list"} -->
<p class="hp-foot__list"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group hp-foot__school"><!-- wp:pattern {"slug":"hatsumei-patent/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hp-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-foot__base"><!-- wp:paragraph {"className":"hp-foot__legal"} -->
<p class="hp-foot__legal"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-foot__legal"} -->
<p class="hp-foot__legal"><?php echo wp_kses_post( hatsumei_patent_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
