<?php
/**
 * Title: Template: single
 * Slug: awa-taproom/tpl-single
 * Categories: awa-taproom
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"awa-main","layout":{"type":"default"}} -->
<main class="wp-block-group awa-main"><!-- wp:group {"tagName":"section","className":"awa-sec awa-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group awa-sec awa-pagehead"><!-- wp:post-featured-image {"className":"awa-pagehead__frame"} /-->

<!-- wp:paragraph {"className":"awa-side"} -->
<p class="awa-side"><?php echo wp_kses_post( awa_taproom_t( 'k01f8f48c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"awa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group awa-wrap"><!-- wp:post-title {"level":1,"className":"awa-h1 awa-h1--post"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"awa-sec","layout":{"type":"default"}} -->
<section class="wp-block-group awa-sec"><!-- wp:group {"className":"awa-wrap awa-article","layout":{"type":"default"}} -->
<div class="wp-block-group awa-wrap awa-article"><!-- wp:post-date {"format":"<?php echo esc_attr( awa_taproom_t( 'date_fmt' ) ); ?>"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:paragraph {"className":"awa-link"} -->
<p class="awa-link"><a href="/book-a-seat/"><?php echo wp_kses_post( awa_taproom_t( 'k7ef4af95' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->