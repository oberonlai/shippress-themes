<?php
/**
 * Title: Template: not found
 * Slug: azukari-stays/tpl-404
 * Categories: azukari-stays
 * Inserter: false
 * Description: 404 page.
 */
?>
<!-- wp:group {"tagName":"main","className":"az-main az-main--pad","layout":{"type":"constrained"}} -->
<main class="wp-block-group az-main az-main--pad"><!-- wp:heading {"level":1,"className":"az-h2"} -->
<h1 class="wp-block-heading az-h2"><?php echo esc_html( azukari_stays_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azukari_stays_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"az-mail"} -->
<div class="wp-block-button az-mail"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( azukari_stays_t( 'tpl_404_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->
