<?php
/**
 * Title: Home: latest journal notes
 * Slug: sumai-realty/home-journal
 * Categories: sumai-realty
 * Keywords: journal, news, posts, latest, blog
 * Viewport Width: 1440
 * Description: The three latest journal posts as ruled index rows (date, title, topic), with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section"><!-- wp:group {"align":"wide","className":"sr-journal","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-journal"><!-- wp:group {"className":"sr-head-row sr-head-row--split","layout":{"type":"default"}} -->
<div class="wp-block-group sr-head-row sr-head-row--split"><!-- wp:group {"className":"sr-head-row__title","layout":{"type":"default"}} -->
<div class="wp-block-group sr-head-row__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sheet 04 · Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sr-h"} -->
<h2 class="wp-block-heading sr-h">Notes from the office.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sr-index"} -->
<div class="wp-block-query sr-index"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
