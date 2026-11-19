<?php
/**
 * Title: Journal: three posts from the kitchen
 * Slug: sumibi-yakiniku/journal
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: The latest three journal posts in three columns with 3:2 photographs, the category above each title.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-journal","layout":{"type":"default"}} -->
<section class="wp-block-group sy-journal" id="journal"><!-- wp:paragraph {"className":"sy-label sy-label--l sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--l sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'journal_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'journal_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sy-jq sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-query sy-jq sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"sy-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sy-post","layout":{"type":"default"}} -->
<div class="wp-block-group sy-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sy-post__img"} /-->

<!-- wp:post-terms {"term":"category","className":"sy-post__cat"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sy-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sy-more"} -->
<p class="sy-more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'journal_more' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
