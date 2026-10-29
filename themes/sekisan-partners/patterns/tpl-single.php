<?php
/**
 * Title: Template: single
 * Slug: sekisan-partners/tpl-single
 * Categories: sekisan-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sk-main","layout":{"type":"default"}} -->
<main class="wp-block-group sk-main" id="top"><!-- wp:group {"tagName":"article","className":"sk-wrap sk-page sk-single","layout":{"type":"default"}} -->
<article class="wp-block-group sk-wrap sk-page sk-single"><!-- wp:post-terms {"term":"category","className":"sk-chip sk-single__chip"} /-->

<!-- wp:post-title {"level":1,"className":"sk-head sk-head--sm"} /-->

<!-- wp:post-date {"format":"M. j, Y","className":"sk-single__date"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9","className":"sk-single__img"} /-->

<!-- wp:post-content {"className":"sk-single__body","layout":{"type":"default"}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-sk-wide"} -->
<div class="wp-block-button is-style-sk-wide"><a class="wp-block-button__link wp-element-button" href="/request-a-proposal/"><?php echo wp_kses_post( sekisan_partners_t( 'k6f96ac44' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></article>
<!-- /wp:group --></main>
<!-- /wp:group -->