<?php
/**
 * Title: Home: notes from the bench
 * Slug: komugi-school/front-journal
 * Categories: komugi-school
 * Inserter: yes
 * Viewport Width: 1440
 * Description: The three latest posts as hairline rows with a category chip, date and 4:3 thumbnail.
 */
?>
<!-- wp:group {"className":"ks-journal ks-sec","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group ks-journal ks-sec"><!-- wp:group {"className":"ks-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sechead"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the bench</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Observations on sourdough hydration, lamination temperatures, and commercial bakery operations written directly by Komugi School instructors and visiting bakers from our partner network.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ks-posts"} -->
<div class="wp-block-query ks-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"ks-row ks-row--post","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--post"><!-- wp:group {"className":"ks-row__when","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row__when"><!-- wp:post-terms {"term":"category","className":"is-style-chip-fill ks-chip ks-postterm"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ks-time"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"ks-row__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"ks-row__ex"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","scale":"cover","className":"ks-row__thumb"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"ks-btns"} -->
<div class="wp-block-buttons ks-btns"><!-- wp:button {"className":"is-style-pill"} -->
<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
