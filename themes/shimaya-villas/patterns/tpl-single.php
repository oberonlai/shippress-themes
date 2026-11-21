<?php
/**
 * Title: Template: single
 * Slug: shimaya-villas/tpl-single
 * Categories: shimaya-villas
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sv-main","layout":{"type":"default"}} -->
<main class="wp-block-group sv-main"><!-- wp:group {"align":"full","className":"sv-hero sv-hero--in sv-hero--plain","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sv-hero sv-hero--in sv-hero--plain"><!-- wp:post-featured-image {"aspectRatio":"auto","className":"sv-window sv-window--feat sp-parallax"} /-->
<!-- wp:group {"className":"sv-panel","layout":{"type":"default"}} -->
<div class="wp-block-group sv-panel"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"className":"sv-h1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"sv-sec sv-article","layout":{"type":"default"}} -->
<div class="wp-block-group sv-sec sv-article"><!-- wp:group {"className":"sv-article__meta","layout":{"type":"default"}} -->
<div class="wp-block-group sv-article__meta"><!-- wp:post-date {"format":"<?php echo esc_attr( shimaya_villas_t( 'date_fmt' ) ); ?>"} /-->
<!-- wp:post-terms {"term":"category","prefix":"\u2022 "} /--></div>
<!-- /wp:group -->
<!-- wp:post-content {"className":"sv-article__body","layout":{"type":"default"}} /-->
<!-- wp:post-terms {"term":"post_tag","className":"sv-tags"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->