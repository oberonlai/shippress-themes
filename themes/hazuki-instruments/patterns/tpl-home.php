<?php
/**
 * Title: Template: home
 * Slug: hazuki-instruments/tpl-home
 * Categories: hazuki-instruments
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hz-main"><!-- wp:group {"tagName":"section","align":"full","className":"hz-sec hz-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hz-sec hz-page"><!-- wp:paragraph {"className":"hz-label"} -->
<p class="hz-label"><?php echo wp_kses_post( hazuki_instruments_t( 'kad11572a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","className":"hz-page__title"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"postType":"post","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"className":"hz-row hz-row--post","layout":{"type":"default"}} -->
<div class="wp-block-group hz-row hz-row--post"><!-- wp:post-date {"className":"hz-row__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-row__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hazuki_instruments_t( 'k5be125ad' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->