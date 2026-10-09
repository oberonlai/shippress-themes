<?php
/**
 * Title: Journal — three latest entries
 * Slug: beni-kappo/latest-journal
 * Categories: beni-kappo, query, featured
 * Keywords: journal, news, posts, latest, blog
 * Viewport Width: 1440
 * Description: The three newest journal entries in tall noren-cut pictures, staggered at three heights.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"bk-section-head bk-section-head--row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide bk-section-head bk-section-head--row"><!-- wp:group {"className":"bk-section-head__text","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-section-head__text"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>behind the counter</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All entries</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"bk-journal","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-query alignwide bk-journal" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-template {"className":"bk-entries","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"bk-entry","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-entry"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"is-style-noren-cut bk-entry__image"} /-->

<!-- wp:group {"className":"bk-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group bk-post-meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"bk-entry__title","fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
