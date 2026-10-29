<?php
/**
 * Title: Template: home
 * Slug: kesho-college/tpl-home
 * Categories: kesho-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main ","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main "><!-- wp:group {"className":"kc-list-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-list-head"><!-- wp:paragraph {"className":"kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo wp_kses_post( kesho_college_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h2 kc-h2--left"} -->
<h1 class="wp-block-heading kc-h2 kc-h2--left"><?php echo wp_kses_post( kesho_college_t( 'kdf589719' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kc-list"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":28} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"kc-body kc-body--left"} -->
<p class="kc-body kc-body--left"><?php echo wp_kses_post( kesho_college_t( 'k67f0f397' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->