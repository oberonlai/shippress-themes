<?php
/**
 * Title: Template: archive
 * Slug: denki-components/tpl-archive
 * Categories: denki-components
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"dk-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group dk-main"><!-- wp:group {"tagName":"section","align":"full","className":"dk-sec dk-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull dk-sec dk-pagehead"><!-- wp:group {"align":"wide","className":"dk-ph","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide dk-ph"><!-- wp:group {"className":"dk-ph__l","layout":{"type":"default"}} -->
<div class="wp-block-group dk-ph__l"><!-- wp:paragraph {"className":"dk-label"} -->
<p class="dk-label"><?php echo wp_kses_post( denki_components_t( 'ke727b009' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"dk-h1"} /--></div>
<!-- /wp:group -->

<!-- wp:term-description {"className":"dk-ph__intro"} /-->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"dk-sec dk-sec--tight dk-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull dk-sec dk-sec--tight dk-page"><!-- wp:group {"align":"wide","className":"dk-newslist","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide dk-newslist"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"dk-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group dk-newsrow"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"className":"dk-newsrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group dk-newsrow__text"><!-- wp:post-date {"className":"dk-index"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":40} /-->

<!-- wp:read-more {"content":"Read the post","className":"dk-more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( denki_components_t( 'kfc45cd31' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->