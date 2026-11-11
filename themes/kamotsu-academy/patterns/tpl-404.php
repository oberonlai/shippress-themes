<?php
/**
 * Title: Template: 404
 * Slug: kamotsu-academy/tpl-404
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not found.
 */
?>
<!-- wp:group {"tagName":"main","className":"ka-main","layout":{"type":"default"}} -->
<main class="wp-block-group ka-main"><!-- wp:group {"className":"ka-sec ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sec ka-wrap">
<!-- wp:heading {"level":1,"className":"ka-pagetitle"} -->
<h1 class="wp-block-heading ka-pagetitle"><?php echo wp_kses_post( kamotsu_academy_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kamotsu_academy_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"ka-pill ka-pill--book"} -->
<div class="wp-block-button ka-pill ka-pill--book"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( kamotsu_academy_t( 'tpl_404_b' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></main>
<!-- /wp:group -->
