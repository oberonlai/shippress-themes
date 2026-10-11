<?php
/**
 * Title: Home: latest from the journal
 * Slug: sushi-ginza/home-journal
 * Categories: sushi-ginza
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: The three latest posts as an index of dates and titles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-journal"><!-- wp:group {"className":"sg-index__intro","layout":{"type":"default"}} -->
<div class="wp-block-group sg-index__intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sg-index__head"} -->
<h2 class="wp-block-heading sg-index__head">From the counter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sg-notes"} -->
<div class="wp-block-query sg-notes"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"sg-links"} -->
<div class="wp-block-buttons sg-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal entries</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
