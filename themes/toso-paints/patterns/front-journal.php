<?php
/**
 * Title: Home: journal rows
 * Slug: toso-paints/front-journal
 * Categories: toso-paints
 * Keywords: paint, wallpaper, shop
 * Viewport Width: 1440
 * Description: Three latest journal posts as ruled rows with a date, a title and a small photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-sec tp-journal","backgroundColor":"raised","anchor":"journal","layout":{"type":"constrained"}} -->
<section id="journal" class="wp-block-group alignfull tp-sec tp-journal has-raised-background-color has-background"><!-- wp:group {"align":"wide","className":"tp-journal__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tp-journal__in"><!-- wp:paragraph {"className":"tp-label tp-label--slant"} -->
<p class="tp-label tp-label--slant">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"tp-rows"} -->
<div class="wp-block-query tp-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"tp-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tp-row sp-reveal sp-reveal--up"><!-- wp:post-date {"format":"j M Y","className":"tp-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tp-row__title"} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"tp-row__img"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>New notes are on the way.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"tp-linkrow"} -->
<p class="tp-linkrow"><a href="/journal/">Read journal</a> <span class="tp-circle" aria-hidden="true">→</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
