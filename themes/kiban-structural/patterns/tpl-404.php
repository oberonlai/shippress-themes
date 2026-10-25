<?php
/**
 * Title: Template: 404
 * Slug: kiban-structural/tpl-404
 * Categories: kiban-structural
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kb-main","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group kb-main"><!-- wp:heading {"level":1,"className":"kb-pagetitle"} -->
<h1 class="wp-block-heading kb-pagetitle"><?php echo esc_html( kiban_structural_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kiban_structural_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->
