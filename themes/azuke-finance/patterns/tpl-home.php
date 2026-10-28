<?php
/**
 * Title: Template: home
 * Slug: azuke-finance/tpl-home
 * Categories: azuke-finance
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"az-main az-journal-list","layout":{"type":"default"}} -->
<main class="wp-block-group az-main az-journal-list"><!-- wp:heading {"level":1,"className":"az-h1 az-h1--page"} -->
<h1 class="wp-block-heading az-h1 az-h1--page"><?php echo wp_kses_post( azuke_finance_t( 'ka4704fd3' ) ); ?> <span class="az-accent"><?php echo wp_kses_post( azuke_finance_t( 'k6b2b5614' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.4","className":"az-card__img"} /-->

<!-- wp:post-title {"isLink":true,"level":2} /-->

<!-- wp:post-excerpt {"excerptLength":28} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->