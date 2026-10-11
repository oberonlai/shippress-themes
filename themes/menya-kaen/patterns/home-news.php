<?php
/**
 * Title: Home: from the counter (latest notes)
 * Slug: menya-kaen/home-news
 * Categories: menya-kaen
 * Keywords: news, journal, posts, notes
 * Viewport Width: 1440
 * Description: The three latest posts as a ruled list of dates and titles, then a link to all notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section mk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section mk-section--last"><!-- wp:group {"className":"mk-chapter","layout":{"type":"default"}} -->
<div class="wp-block-group mk-chapter"><!-- wp:paragraph {"className":"mk-chapter__no"} -->
<p class="mk-chapter__no">VI</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Notes</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mk-chapter__title"} -->
<h2 class="wp-block-heading mk-chapter__title">From the counter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"mk-notes"} -->
<div class="wp-block-query mk-notes"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"mk-links"} -->
<div class="wp-block-buttons mk-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
