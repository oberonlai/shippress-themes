<?php
/**
 * Title: Template: archive
 * Slug: kuki-climate/tpl-archive
 * Categories: kuki-climate
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main"><!-- wp:pattern {"slug":"kuki-climate/head-archive"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"kc-notes"} -->
<div class="wp-block-query alignwide kc-notes"><!-- wp:post-template {"className":"kc-rows"} -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-date {"format":"d","className":"kc-row__num"} /-->

<!-- wp:group {"className":"kc-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__text"><!-- wp:post-title {"level":2,"isLink":true,"className":"kc-row__post"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( kuki_climate_t( 'date_fmt' ) ); ?>","className":"kc-row__meta"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"kc-row__excerpt"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:post-terms {"term":"category","className":"kc-row__title"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k67f0f397' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->