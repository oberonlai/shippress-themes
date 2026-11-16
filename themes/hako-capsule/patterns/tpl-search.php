<?php
/**
 * Title: Search results
 * Slug: hako-capsule/tpl-search
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: A search form and the matching entries as ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--archive","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--archive"><!-- wp:group {"className":"hk-title","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title"><!-- wp:query-title {"type":"search","level":2,"className":"hk-title__h"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":<?php echo wp_json_encode( hako_capsule_t( 'srch_ph' ) ); ?>,"buttonText":"Search","className":"hk-search"} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hk-posts"} -->
<div class="wp-block-query hk-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hk-row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row"><!-- wp:post-date {"format":"j M Y","className":"hk-row__date"} /-->

<!-- wp:group {"className":"hk-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row__text"><!-- wp:post-title {"level":3,"isLink":true,"className":"hk-row__t"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"hk-row__p"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hako_capsule_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hako_capsule_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
