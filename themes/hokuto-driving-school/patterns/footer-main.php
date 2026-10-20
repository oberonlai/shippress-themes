<?php
/**
 * Title: Footer: school name, letter, links, school details and the base line
 * Slug: hokuto-driving-school/footer-main
 * Categories: hokuto-driving-school
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The deep slate footer: the school name and line, the newsletter note, the page links, the synced school details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"hk-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull hk-foot"><!-- wp:group {"align":"wide","className":"hk-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-foot__grid"><!-- wp:group {"className":"hk-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hk-foot__brand"><!-- wp:paragraph {"className":"hk-foot__mark"} -->
<p class="hk-foot__mark"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-foot__line"} -->
<p class="hk-foot__line"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-foot__letter"} -->
<p class="hk-foot__letter"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group hk-foot__links"><!-- wp:paragraph {"className":"hk-foot__kicker"} -->
<p class="hk-foot__kicker"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-foot__list"} -->
<p class="hk-foot__list"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group hk-foot__school"><!-- wp:pattern {"slug":"hokuto-driving-school/school"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hk-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-foot__base"><!-- wp:paragraph {"className":"hk-foot__legal"} -->
<p class="hk-foot__legal"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-foot__legal"} -->
<p class="hk-foot__legal"><?php echo wp_kses_post( hokuto_driving_school_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
