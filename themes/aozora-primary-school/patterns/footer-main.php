<?php
/**
 * Title: Footer: school name, letter, links, school details and the base line
 * Slug: aozora-primary-school/footer-main
 * Categories: aozora-primary-school
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the school name and line, the parents' letter note, the page links, the synced school details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"ap-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull ap-foot"><!-- wp:group {"align":"wide","className":"ap-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-foot__grid"><!-- wp:group {"className":"ap-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ap-foot__brand"><!-- wp:paragraph {"className":"ap-foot__mark"} -->
<p class="ap-foot__mark"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-foot__line"} -->
<p class="ap-foot__line"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-foot__letter"} -->
<p class="ap-foot__letter"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group ap-foot__links"><!-- wp:paragraph {"className":"ap-foot__kicker"} -->
<p class="ap-foot__kicker"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-foot__list"} -->
<p class="ap-foot__list"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group ap-foot__school"><!-- wp:pattern {"slug":"aozora-primary-school/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ap-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-foot__base"><!-- wp:paragraph {"className":"ap-foot__legal"} -->
<p class="ap-foot__legal"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-foot__legal"} -->
<p class="ap-foot__legal"><?php echo wp_kses_post( aozora_primary_school_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
