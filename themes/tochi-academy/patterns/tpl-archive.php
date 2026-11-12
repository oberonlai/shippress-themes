<?php
/**
 * Title: Template: archive
 * Slug: tochi-academy/tpl-archive
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ta-main ta-page ta-page--archive","layout":{"type":"default"}} -->
<main class="wp-block-group ta-main ta-page ta-page--archive"><!-- wp:group {"className":"ta-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group ta-page__head"><!-- wp:group {"className":"ta-page__headtext","layout":{"type":"default"}} -->
<div class="wp-block-group ta-page__headtext"><!-- wp:query-title {"type":"archive","level":1,"className":"ta-page__title"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"ta-page__img"} -->
<figure class="wp-block-image size-large ta-page__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P02.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"ta-journal","layout":{"type":"default"}} -->
<div class="wp-block-query ta-journal"><!-- wp:post-template {"className":"ta-cards ta-cards--posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ta-card ta-card--post","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card ta-card--post"><!-- wp:post-featured-image {"isLink":true,"className":"ta-card__photo"} /-->

<!-- wp:post-date {"className":"ta-vdate"} /-->

<!-- wp:group {"className":"ta-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card__panel"><!-- wp:post-terms {"term":"category","className":"ta-cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing has been published here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
