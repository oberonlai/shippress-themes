<?php
/**
 * Title: Episodes: numbered index with running times
 * Slug: oto-radio/episodes-index
 * Categories: oto-radio
 * Keywords: episodes, index, list, archive, duration, numbered
 * Viewport Width: 1280
 * Description: Every episode as a programme-guide row: number, title and topic, the date it aired, its running time and a waveform. Twenty to a page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-section oto-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull oto-section oto-section--tight"><!-- wp:query {"queryId":3,"query":{"perPage":20,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"oto-index"} -->
<div class="wp-block-query alignwide oto-index"><!-- wp:group {"className":"oto-index__labels","layout":{"type":"default"}} -->
<div class="wp-block-group oto-index__labels"><!-- wp:paragraph {"className":"oto-index__label"} -->
<p class="oto-index__label">No.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"oto-index__label"} -->
<p class="oto-index__label">Episode</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"oto-index__label"} -->
<p class="oto-index__label">Aired</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"oto-index__label"} -->
<p class="oto-index__label">Length</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-template -->
<!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"number"}}}},"className":"oto-row__no"} -->
<p class="oto-row__no"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"oto-row__main","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row__main"><!-- wp:post-title {"level":3,"isLink":true,"className":"oto-row__title"} /-->

<!-- wp:post-terms {"term":"category","className":"oto-row__terms"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"format":"j M Y","className":"oto-row__date"} /-->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"oto-radio/episode","args":{"key":"duration"}}}},"className":"oto-row__time"} -->
<p class="oto-row__time"></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wave oto-row__wave"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wave oto-row__wave"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"oto-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Newer"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Older"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"oto-empty"} -->
<p class="oto-empty">No episodes yet. The first one is always the hardest.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","className":"oto-index__foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-index__foot"><!-- wp:paragraph {"className":"oto-muted"} -->
<p class="oto-muted">New here? Start with a <a href="/category/night-walks/">night walk</a>: no guests, just a place and two microphones.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
