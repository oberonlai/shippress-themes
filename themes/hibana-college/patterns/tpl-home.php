<?php
/**
 * Title: Template: home
 * Slug: hibana-college/tpl-home
 * Categories: hibana-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hc-main hc-inner hc-posts","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group hc-main hc-inner hc-posts">
<!-- wp:heading {"level":1,"className":"hc-ph__title"} -->
<h1 class="wp-block-heading hc-ph__title"><?php echo wp_kses_post( hibana_college_t( 'thome' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"hc-post__meta","layout":{"type":"default"}} -->
<div class="wp-block-group hc-post__meta"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"level":2,"className":"hc-h2"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'tno' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
