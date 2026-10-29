<?php
/**
 * Title: Template: search
 * Slug: yuragi-spa/tpl-search
 * Categories: yuragi-spa
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"yu-main yu-main--wide","layout":{"type":"default"}} -->
<main class="wp-block-group yu-main yu-main--wide"><!-- wp:group {"align":"full","className":"yu-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yu-pagehead"><!-- wp:group {"className":"yu-in","layout":{"type":"default"}} -->
<div class="wp-block-group yu-in"><!-- wp:columns {"className":"yu-cols"} -->
<div class="wp-block-columns yu-cols"><!-- wp:column {"className":"yu-c7"} -->
<div class="wp-block-column yu-c7"><!-- wp:paragraph {"className":"yu-bracket"} -->
<p class="yu-bracket"><?php echo wp_kses_post( yuragi_spa_t( 'k13348442' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"yu-h yu-h--page"} /-->

<!-- wp:paragraph {"className":"yu-sub"} -->
<p class="yu-sub"><?php echo wp_kses_post( yuragi_spa_t( 'kda980c28' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"yu-c5 yu-endcol"} -->
<div class="wp-block-column yu-c5 yu-endcol"><!-- wp:paragraph {"className":"yu-hpair"} -->
<p class="yu-hpair"><span class="yu-ct">(01)</span><span class="yu-w"><?php echo wp_kses_post( yuragi_spa_t( 'ka0b271a9' ) ); ?></span><span class="yu-dash" aria-hidden="true"></span><span class="yu-w"><?php echo wp_kses_post( yuragi_spa_t( 'k4cfa6c98' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"yu-sec yu-isec yu-isec--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yu-sec yu-isec yu-isec--list"><!-- wp:group {"className":"yu-in","layout":{"type":"default"}} -->
<div class="wp-block-group yu-in"><!-- wp:query {"queryId":3,"query":{"perPage":9,"postType":"post","inherit":true},"className":"yu-posts","layout":{"type":"default"}} -->
<div class="wp-block-query yu-posts"><!-- wp:post-template {"className":"yu-posts__list"} -->
<!-- wp:group {"className":"yu-post","layout":{"type":"default"}} -->
<div class="wp-block-group yu-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"yu-ph yu-post__img"} /-->

<!-- wp:group {"className":"yu-post__txt","layout":{"type":"default"}} -->
<div class="wp-block-group yu-post__txt"><!-- wp:post-date {"format":"<?php echo esc_attr( yuragi_spa_t( 'date_fmt' ) ); ?>","className":"yu-post__date"} /-->

<!-- wp:post-title {"isLink":true,"level":2,"className":"yu-post__title"} /-->

<!-- wp:post-excerpt {"moreText":"Read the note","excerptLength":28,"className":"yu-post__ex"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"yu-pager","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yuragi_spa_t( 'k1121a6b7' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->