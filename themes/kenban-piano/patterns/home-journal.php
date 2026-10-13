<?php
/**
 * Title: Home: journal
 * Slug: kenban-piano/home-journal
 * Categories: kenban-piano
 * Keywords: piano school
 * Viewport Width: 1440
 * Description: The three latest journal posts as ruled text rows (date, title, category), no pictures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-section kb-band kb-band--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-band kb-band--flush"><!-- wp:group {"align":"wide","className":"kb-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kb-sechead"><!-- wp:paragraph {"className":"kb-mark"} -->
<p class="kb-mark">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kb-sechead__title"} -->
<h2 class="wp-block-heading kb-sechead__title">Between lessons.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"kb-links"} -->
<div class="wp-block-buttons kb-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kb-notes kb-notes--text"} -->
<div class="wp-block-query alignwide kb-notes kb-notes--text"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j M Y","className":"kb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kb-note__title"} /-->

<!-- wp:post-terms {"term":"category","className":"kb-note__cat"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
