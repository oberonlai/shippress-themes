<?php
/**
 * Title: Template: home
 * Slug: yui-credit-union/tpl-home
 * Categories: yui-credit-union
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ycu-main","layout":{"type":"default"}} -->
<main class="wp-block-group ycu-main"><!-- wp:group {"tagName":"section","align":"full","className":"ycu-sec ycu-pagehead ycu-jq","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ycu-sec ycu-pagehead ycu-jq"><!-- wp:group {"align":"wide","className":"ycu-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ycu-head"><!-- wp:paragraph {"className":"ycu-label"} -->
<p class="ycu-label"><span class="ycu-ix">01</span> <?php echo wp_kses_post( yui_credit_union_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ycu-h2"} -->
<h1 class="wp-block-heading ycu-h2"><?php echo wp_kses_post( yui_credit_union_t( 'kb2a005a5' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":9,"postType":"post","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ycu-pick ycu-pick--3"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ycu-pick__img"} /-->
<!-- wp:post-date {"className":"ycu-label ycu-jq__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"ycu-pick__name"} /-->
<!-- wp:post-excerpt {"excerptLength":24,"className":"ycu-pick__desc"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->