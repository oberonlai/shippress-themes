<?php
/**
 * Title: Template: archive
 * Slug: mimamori-college/tpl-archive
 * Categories: mimamori-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"mc-main mc-inner mc-posts","layout":{"type":"constrained"}} -->
<main class="wp-block-group mc-main mc-inner mc-posts"><!-- wp:query-title {"type":"archive","level":1,"className":"mc-ph__title"} /-->

<!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"mc-post__meta","layout":{"type":"default"}} -->
<div class="wp-block-group mc-post__meta"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"level":2,"className":"mc-h2"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mimamori_college_t( 'k4c0f1373' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->