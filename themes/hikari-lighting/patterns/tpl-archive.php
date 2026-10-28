<?php
/**
 * Title: Template: archive
 * Slug: hikari-lighting/tpl-archive
 * Categories: hikari-lighting
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hl-main hl-main--list","layout":{"type":"default"}} -->
<main class="wp-block-group hl-main hl-main--list"><!-- wp:group {"tagName":"section","align":"full","className":"hl-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-pagehead"><!-- wp:group {"className":"hl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'kdd18b704' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"hl-pagehead__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hl-marq hl-pagehead__marq sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hl-marq hl-pagehead__marq sp-marquee"><!-- wp:group {"className":"hl-marq__run","layout":{"type":"default"}} -->
<div class="wp-block-group hl-marq__run"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'k0fd8c36c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hl-marq__run hl-marq__run--dup" aria-hidden="true"><p><?php echo wp_kses_post( hikari_lighting_t( 'k0fd8c36c' ) ); ?></p></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-wrap hl-body hl-jlist","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-body hl-jlist"><!-- wp:query {"query":{"perPage":10,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template --><!-- wp:group {"className":"hl-jrow","layout":{"type":"default"}} --><div class="wp-block-group hl-jrow"><!-- wp:group {"className":"hl-jrow__title hl-mono","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group hl-jrow__title hl-mono"><!-- wp:post-date {"format":"Y-m-d","className":"hl-mono"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"hl-jrow__name"} /--></div><!-- /wp:group --><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/1","className":"hl-jrow__img sp-reveal sp-reveal--wipe"} /--><!-- wp:post-excerpt {"excerptLength":30,"className":"hl-jrow__ex"} /--></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-pagination {"className":"hl-mono"} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --><!-- wp:query-no-results --><!-- wp:paragraph --><p><?php echo wp_kses_post( hikari_lighting_t( 'k3f58a6fa' ) ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->