<?php
/**
 * Title: Latest from the journal
 * Slug: hamono-kaji/latest-journal
 * Categories: hamono-kaji, query
 * Keywords: posts, journal, news, blog
 * Viewport Width: 1440
 * Description: A numbered section head and the three newest posts in ruled cells.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head"><!-- wp:group {"className":"hk-head__titles","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__titles"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">05 — Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the anvil</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hk-list hk-list--ruled"} -->
<div class="wp-block-query alignwide hk-list hk-list--ruled"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"hk-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card-body"><!-- wp:group {"className":"hk-card-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-card-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
