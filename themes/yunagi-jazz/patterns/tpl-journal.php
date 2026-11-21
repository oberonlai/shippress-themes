<?php
/**
 * Title: Template: journal
 * Slug: yunagi-jazz/tpl-journal
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Posts page: three-photograph header and the posts in three equal columns.
 */
?>
<!-- wp:group {"className":"yj-mat yj-mat--mini","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat yj-mat--mini">
<!-- wp:group {"className":"yj-mat__col yj-mat__col--1","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-lawn-blue-hour.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--2 sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--2 sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-crew-lanterns.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__col yj-mat__col--3","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--3">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-mat__img"} -->
<figure class="wp-block-image size-full yj-mat__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-bassist-tuning.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__grad","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__grad"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__title","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__title">
<!-- wp:heading {"level":1,"className":"yj-h1 yj-h1--mini"} -->
<h1 class="wp-block-heading yj-h1 yj-h1--mini"><?php echo esc_html( yunagi_jazz_t( 'jl_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-sheet yj-sheet--journal","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group yj-sheet yj-sheet--journal">
<!-- wp:query {"queryId":31,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"yj-query"} -->
<div class="wp-block-query yj-query"><!-- wp:post-template {"className":"yj-query__grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"yj-post","layout":{"type":"default"}} -->
<div class="wp-block-group yj-post">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"yj-post__img"} /-->

<!-- wp:post-date {"className":"yj-post__date"} /-->

<!-- wp:post-terms {"term":"category","className":"yj-post__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yj-post__title"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query-pagination {"className":"yj-pager","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</section>
<!-- /wp:group -->
