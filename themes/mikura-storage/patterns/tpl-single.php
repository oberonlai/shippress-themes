<?php
/**
 * Title: Template: single
 * Slug: mikura-storage/tpl-single
 * Categories: mikura-storage
 * Inserter: no
 * Viewport Width: 1440
 * Description: Single post.
 */
?>
<!-- wp:group {"tagName":"main","className":"mk-main mk-single","layout":{"type":"default"}} -->
<main class="wp-block-group mk-main mk-single">
<!-- wp:group {"className":"mk-sec mk-sec--post","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-sec mk-sec--post">
<!-- wp:group {"className":"mk-wrap mk-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap mk-wrap--narrow">
<!-- wp:post-terms {"term":"category","className":"mk-kicker"} /-->

<!-- wp:post-title {"level":1,"className":"mk-h1 mk-h1--inner"} /-->

<!-- wp:post-date {"className":"mk-date"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9","className":"mk-ph mk-post__img"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:buttons {"className":"mk-btns"} -->
<div class="wp-block-buttons mk-btns"><!-- wp:button {"className":"mk-btn mk-btn--solid"} -->
<div class="wp-block-button mk-btn mk-btn--solid"><a class="wp-block-button__link wp-element-button" href="/#reserve"><?php echo wp_kses_post( mikura_storage_t( 'k26bd62d6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
