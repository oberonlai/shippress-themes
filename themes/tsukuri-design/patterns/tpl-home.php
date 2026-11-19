<?php
/**
 * Title: Template: home
 * Slug: tsukuri-design/tpl-home
 * Categories: tsukuri-design
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"td-main","layout":{"type":"default"}} -->
<main class="wp-block-group td-main"><!-- wp:pattern {"slug":"tsukuri-design/strip-journal"} /--><!-- wp:group {"tagName":"section","className":"td-sec td-sec--paper","layout":{"type":"default"}} --><section class="wp-block-group td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} --><div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} --><h2 class="wp-block-heading td-label"><?php echo wp_kses_post( tsukuri_design_t( 'k0b442126' ) ); ?></h2><!-- /wp:heading --><!-- wp:separator {"className":"td-hair"} --><hr class="wp-block-separator has-alpha-channel-opacity td-hair"/><!-- /wp:separator --></div><!-- /wp:group --><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"td-jr"} --><div class="wp-block-query td-jr"><!-- wp:post-template {"className":"td-jr__list","layout":{"type":"default"}} --><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"td-jr__img"} /--><!-- wp:group {"className":"td-jr__txt","layout":{"type":"default"}} --><div class="wp-block-group td-jr__txt"><!-- wp:group {"className":"td-jr__meta","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group td-jr__meta"><!-- wp:post-date {"format":"M Y"} /--><!-- wp:post-terms {"term":"category"} /--></div><!-- /wp:group --><!-- wp:post-title {"isLink":true,"level":3,"className":"td-jr__t"} /--></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-pagination --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --></div><!-- /wp:query --></section><!-- /wp:group --></main>
<!-- /wp:group -->