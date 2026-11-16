<?php
/**
 * Title: Template: single
 * Slug: futari-journeys/tpl-single
 * Categories: futari-journeys
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"fj-main fj-main--single","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull fj-main fj-main--single"><!-- wp:group {"className":"fj-section fj-section--in fj-single","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull fj-section fj-section--in fj-single"><!-- wp:group {"className":"fj-narrow fj-single__head","layout":{"type":"default"}} -->
<div class="wp-block-group fj-narrow fj-single__head"><!-- wp:group {"className":"fj-eyebrow-row","layout":{"type":"default"}} -->
<div class="wp-block-group fj-eyebrow-row"><!-- wp:post-terms {"term":"category","className":"fj-eyebrow"} /-->

<!-- wp:separator {"className":"fj-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"fj-h1 fj-h1--in"} /-->

<!-- wp:post-date {"className":"fj-facts"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"2.4","className":"fj-single__img"} /-->

<!-- wp:group {"className":"fj-prose","layout":{"type":"default"}} -->
<div class="wp-block-group fj-prose"><!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","className":"fj-fine"} /-->

<!-- wp:paragraph {"className":"fj-more"} -->
<p class="fj-more"><a href="/journal/"><?php echo wp_kses_post( futari_journeys_t( 'k4fb581ac' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"futari-journeys/front-book"} /--></main>
<!-- /wp:group -->