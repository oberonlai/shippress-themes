<?php
/**
 * Title: Template: single
 * Slug: aya-paper/tpl-single
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main ap-single","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main ap-single">
<!-- wp:post-terms {"term":"category","className":"ap-chip"} /-->

<!-- wp:post-title {"level":1} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ap-note__date"} /-->

<!-- wp:group {"className":"ap-single__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ap-single__photo">
<!-- wp:group {"className":"ap-frame ap-frame--line","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame ap-frame--line">
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"ap-jfeat__img"} /-->


</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"default"},"className":"ap-single__body"} /-->

<!-- wp:group {"className":"ap-single__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ap-single__foot">
<!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: ","separator":", ","className":"ap-label"} /-->

<!-- wp:paragraph {"className":"ap-dotlink"} -->
<p class="ap-dotlink"><a href="/journal/"><?php echo wp_kses_post( aya_paper_t( 'k7fdee75c' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->