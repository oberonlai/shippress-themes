<?php
/**
 * Title: Template: single
 * Slug: nodo-ent/tpl-single
 * Categories: nodo-ent
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"nd-main","layout":{"type":"default"}} -->
<main class="wp-block-group nd-main"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isDark":false,"align":"full","className":"sp-parallax nd-head nd-head--post"} -->
<div class="wp-block-cover alignfull is-light sp-parallax nd-head nd-head--post"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"nd-strips","layout":{"type":"default"}} -->
<div class="wp-block-group nd-strips"><!-- wp:post-title {"level":1,"className":"nd-strip1"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"article","align":"full","className":"nd-sec nd-last nd-article","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull nd-sec nd-last nd-article"><!-- wp:post-date /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"category","prefix":"Filed under "} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: "} /-->

<!-- wp:paragraph {"className":"nd-link"} -->
<p class="nd-link"><a href="/notes/"><?php echo wp_kses_post( nodo_ent_t( 'k2ad7f9ad' ) ); ?></a></p>
<!-- /wp:paragraph --></article>
<!-- /wp:group --></main>
<!-- /wp:group -->