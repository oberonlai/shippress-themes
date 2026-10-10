<?php
/**
 * Title: Home: news as big headlines
 * Slug: menya-kaen/home-news
 * Categories: menya-kaen
 * Keywords: news, journal, posts, headlines, newsletter
 * Viewport Width: 1440
 * Description: The three latest posts as oversized headlines (date and title only), then the newsletter in one line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section"><!-- wp:group {"align":"wide","className":"mk-news","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-news"><!-- wp:group {"className":"mk-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group mk-row"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the counter</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/">All news</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"mk-headlines"} -->
<div class="wp-block-query mk-headlines"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j M"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"mk-oneline","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group mk-oneline"><!-- wp:heading {"level":3,"className":"mk-oneline__title"} -->
<h3 class="wp-block-heading mk-oneline__title">The Slurp Sheet</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>One email a month: the new bowl, the night we close early, and nothing else.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/newsletter/">Sign up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
