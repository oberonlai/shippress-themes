<?php
/**
 * Title: Template: Single post
 * Slug: seimyaku-clinic/tpl-single
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Post head with the featured image, the text and the tags.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/news/">News</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"sz-phead__title"} /-->

<!-- wp:post-date {"format":"j F Y"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-prose"><!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: "} /--></section>
<!-- /wp:group -->
