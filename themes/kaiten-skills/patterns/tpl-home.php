<?php
/**
 * Title: Template: home
 * Slug: kaiten-skills/tpl-home
 * Categories: kaiten-skills
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ks-main ks-main--inner","layout":{"type":"default"}} -->
<main class="wp-block-group ks-main ks-main--inner"><!-- wp:group {"tagName":"section","align":"full","className":"ks-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-pagehead"><!-- wp:group {"className":"ks-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap"><!-- wp:heading {"level":1,"className":"ks-h1 ks-h1--page"} -->
<h1 class="wp-block-heading ks-h1 ks-h1--page"><?php echo wp_kses_post( kaiten_skills_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"ks-prose","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ks-prose"><!-- wp:group {"className":"ks-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","inherit":true},"className":"ks-list"} -->
<div class="wp-block-query ks-list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","scale":"cover","className":"ks-cut ks-cut--card"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"ks-list__t"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k9720c37c' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->