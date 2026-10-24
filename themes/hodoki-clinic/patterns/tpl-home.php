<?php
/**
 * Title: Template: home
 * Slug: hodoki-clinic/tpl-home
 * Categories: hodoki-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hd-main","layout":{"type":"default"}} -->
<main class="wp-block-group hd-main"><!-- wp:pattern {"slug":"hodoki-clinic/page-journal-head"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"hd-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec"><!-- wp:group {"className":"hd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","inherit":true},"className":"hd-list"} -->
<div class="wp-block-query hd-list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","scale":"cover"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"hd-card3__h"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hodoki_clinic_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->