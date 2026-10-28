<?php
/**
 * Title: Template: post list
 * Slug: kama-cookware/tpl-index
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Inserter: no
 * Description: List of journal posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--tpl","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--tpl"><!-- wp:group {"className":"km-wrap km-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-wrap--list"><!-- wp:group {"className":"km-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group km-pagehead"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'jn_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-h2"} -->
<h1 class="wp-block-heading km-h2"><?php echo esc_html( is_search() ? sprintf( kama_cookware_t( 'search_for' ), get_search_query() ) : ( is_404() ? kama_cookware_t( 'nf' ) : kama_cookware_t( 'jn_h' ) ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-wrap km-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-wrap--list"><!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"km-list"} -->
<div class="wp-block-query km-list"><!-- wp:post-template -->
<!-- wp:group {"className":"km-row km-row--j","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j"><!-- wp:post-date {"format":"M j, Y","className":"km-num"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"km-h3"} /-->

<!-- wp:post-excerpt {"className":"km-row__p"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
