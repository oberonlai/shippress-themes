<?php
/**
 * Title: Journal — three latest entries
 * Slug: fuji-shinkyu/latest-journal
 * Categories: fuji-shinkyu, query, featured
 * Keywords: journal, news, posts, latest, blog
 * Viewport Width: 1440
 * Description: The three newest journal entries with circle images, set on three heights like points along a curve.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fs-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull fs-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"fs-section-head fs-section-head--row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide fs-section-head fs-section-head--row"><!-- wp:group {"className":"fs-section-head__text","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fs-section-head__text"><!-- wp:paragraph {"className":"is-style-point-label"} -->
<p class="is-style-point-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the treatment room</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All entries</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-template {"className":"fs-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"is-style-circle"} /-->

<!-- wp:group {"className":"fs-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group fs-post-meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
