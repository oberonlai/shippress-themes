<?php
/**
 * Title: Page head — number, display title and intro
 * Slug: kenchiku-grid/page-head
 * Categories: kenchiku-grid, header, text
 * Keywords: page title, intro, heading, hero
 * Viewport Width: 1400
 * Description: A page opening on the grid: mono section number and label, a display title across ten columns and a short intro paragraph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">(06)<br>Page</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-display-tight","style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading is-style-display-tight">A title set on the grid.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead","style":{"layout":{"columnSpan":5,"columnStart":3}}} -->
<p class="is-style-lead">Use this opening for any page: replace the number, the title and this short introduction.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
