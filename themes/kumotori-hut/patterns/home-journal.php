<?php
/**
 * Title: Home: from the journal
 * Slug: kumotori-hut/home-journal
 * Categories: kumotori-hut
 * Keywords: mountain hut, journal
 * Viewport Width: 1440
 * Description: The three latest journal notes as quiet rows in the reading column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-section kh-col kh-home-journal kh-col--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-col kh-home-journal kh-col--last"><!-- wp:separator {"className":"is-style-tiles"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tiles"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"kh-eyebrow"} -->
<p class="kh-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title">Notes from the front desk.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kh-notes"} -->
<div class="wp-block-query kh-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"kh-note__img"} /-->

<!-- wp:group {"className":"kh-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-note__text"><!-- wp:post-date {"format":"j F Y","className":"kh-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kh-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet. Try another word, or read the latest notes from the journal.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"kh-links"} -->
<div class="wp-block-buttons kh-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
