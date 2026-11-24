<?php
/**
 * Title: Template: search
 * Slug: asayake-lodge/tpl-search
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Search form and results.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-pagehead"><!-- wp:group {"className":"al-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group al-pagehead__in"><!-- wp:heading {"level":1,"className":"al-pagehead__h"} -->
<h1 class="wp-block-heading al-pagehead__h"><?php echo esc_html( asayake_lodge_t( 's_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-listing","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-listing"><!-- wp:group {"className":"al-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group al-wrap"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"al-search"} /-->
<!-- wp:query {"queryId":32,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"al-loop"} -->
<div class="wp-block-query al-loop"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( asayake_lodge_t( 's_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
