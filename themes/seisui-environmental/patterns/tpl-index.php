<?php
/**
 * Title: Template: index
 * Slug: seisui-environmental/tpl-index
 * Categories: seisui-environmental
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ss-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group ss-main" style="margin-top:0"><!-- wp:group {"className":"ss-sec","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-ghost","align":"center"} -->
<p class="ss-ghost has-text-align-center" aria-hidden="true"><?php echo wp_kses_post( seisui_environmental_t( 'k3dbae2c6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ss-h2","align":"center"} -->
<h1 class="wp-block-heading has-text-align-center ss-h2"><?php echo wp_kses_post( seisui_environmental_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-journal","layout":{"type":"default"}} -->
<div class="wp-block-group ss-journal"><!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"ss-post","layout":{"type":"default"}} -->
<div class="wp-block-group ss-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Read the note →"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seisui_environmental_t( 'k1dbe8081' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->