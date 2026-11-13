<?php
/**
 * Title: Search results
 * Slug: koori-coldstore/tpl-search
 * Categories: koori-coldstore
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Search head and ruled results.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pagehead"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( koori_coldstore_t( 's_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","className":"kc-h1 kc-h1--page"} /-->

<!-- wp:search {"label":<?php echo wp_json_encode( koori_coldstore_t( 's_label' ) ); ?>,"showLabel":false,"buttonText":<?php echo wp_json_encode( koori_coldstore_t( 's_btn' ) ); ?>,"className":"kc-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-list"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kc-posts"} -->
<div class="wp-block-query kc-posts"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->