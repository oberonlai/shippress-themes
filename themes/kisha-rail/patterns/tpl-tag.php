<?php
/**
 * Title: Template: tag list
 * Slug: kisha-rail/tpl-tag
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Journal list: framed window with category cells, then the posts as white cards in three columns.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-iwin","layout":{"type":"default"}} -->
<section class="wp-block-group kr-iwin">
<!-- wp:group {"className":"kr-win kr-win--in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win kr-win--in sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-win__img"} -->
<figure class="wp-block-image size-full kr-win__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-lunch-square.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kr-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__scrim">
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__fg">
<!-- wp:query-title {"type":"archive","level":1,"className":"kr-h1"} /-->
<!-- wp:paragraph {"className":"kr-sub"} -->
<p class="kr-sub"><?php echo esc_html( kisha_rail_t( 'tpl_tag_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-itabs","layout":{"type":"default"}} -->
<div class="wp-block-group kr-itabs">
<!-- wp:paragraph {"className":"kr-itab kr-itab--1"} -->
<p class="kr-itab kr-itab--1"><a href="/category/on-the-line/"><?php echo esc_html( kisha_rail_t( 'tab_cat1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--2"} -->
<p class="kr-itab kr-itab--2"><a href="/category/travelling-well/"><?php echo esc_html( kisha_rail_t( 'tab_cat2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kr-itab kr-itab--3"} -->
<p class="kr-itab kr-itab--3"><a href="/category/tour-managers/"><?php echo esc_html( kisha_rail_t( 'tab_cat3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-sec kr-notes","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-notes">
<!-- wp:query {"queryId":9,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kr-posts"} -->
<div class="wp-block-query kr-posts"><!-- wp:post-template {"className":"kr-posts__grid"} -->
<!-- wp:group {"className":"kr-post","layout":{"type":"default"}} -->
<div class="wp-block-group kr-post">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kr-post__img"} /-->

<!-- wp:post-date {"className":"kr-post__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-post__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kr-post__title"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
