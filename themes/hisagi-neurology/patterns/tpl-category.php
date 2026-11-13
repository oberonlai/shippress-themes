<?php
/**
 * Title: Template: category
 * Slug: hisagi-neurology/tpl-category
 * Categories: hisagi-neurology
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hn-main","layout":{"type":"default"}} -->
<main class="wp-block-group hn-main"><!-- wp:group {"tagName":"section","align":"full","className":"hn-ph hn-ph--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-ph hn-ph--plain"><!-- wp:group {"className":"hn-ph__win","layout":{"type":"default"}} -->
<div class="wp-block-group hn-ph__win"><!-- wp:group {"className":"hn-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group hn-ph__text"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'ke38583f3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"hn-h1 hn-h1--inner"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hn-signal hn-signal--ph" aria-hidden="true"><span style="--i:0"></span><span style="--i:1"></span><span style="--i:2"></span><span style="--i:3"></span><span style="--i:4"></span><span style="--i:5"></span><span style="--i:6"></span><span style="--i:7"></span><span style="--i:8"></span><span style="--i:9"></span><span style="--i:10"></span><span style="--i:11"></span><span style="--i:12"></span><span style="--i:13"></span><span style="--i:14"></span><span style="--i:15"></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hn-sec hn-listing","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hn-sec hn-listing"><!-- wp:group {"className":"hn-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hn-narrow"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"hn-rows"} -->
<!-- wp:group {"className":"hn-row","layout":{"type":"default"}} -->
<div class="wp-block-group hn-row"><!-- wp:post-date {"format":"<?php echo esc_attr( hisagi_neurology_t( 'date_fmt' ) ); ?>","className":"hn-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"hn-row__cat"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hn-row__t"} /-->

<!-- wp:paragraph {"className":"hn-row__go"} -->
<p class="hn-row__go">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->