<?php
/**
 * Title: Home: journal
 * Slug: yunagi-jazz/front-journal
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Three latest posts in three equal columns.
 */
?>
<!-- wp:group {"className":"yj-sheet yj-sheet--journal","layout":{"type":"default"},"tagName":"section","anchor":"journal"} -->
<section id="journal" class="wp-block-group yj-sheet yj-sheet--journal">
<!-- wp:group {"className":"yj-sh","layout":{"type":"default"}} -->
<div class="wp-block-group yj-sh">
<!-- wp:heading {"level":2,"className":"yj-sh__t"} -->
<h2 class="wp-block-heading yj-sh__t"><?php echo esc_html( yunagi_jazz_t( 'jr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-sh__label"} -->
<p class="yj-sh__label"><?php echo esc_html( yunagi_jazz_t( 'jr_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"yj-query sp-reveal sp-reveal--up"} -->
<div class="wp-block-query yj-query sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"yj-query__grid","layout":{"type":"grid","columnCount":3}} -->
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

<!-- wp:paragraph {"className":"yj-more"} -->
<p class="yj-more"><a href="/journal/"><?php echo esc_html( yunagi_jazz_t( 'jr_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
