<?php
/**
 * Title: Template: journal list
 * Slug: moyooshi-productions/tpl-home
 * Categories: moyooshi-productions
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and the archive templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"mp-sec mp-listhead","layout":{"type":"default"}} -->
<section class="wp-block-group mp-sec mp-listhead"><!-- wp:group {"className":"mp-frame","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame"><!-- wp:group {"className":"mp-giant mp-giant--page","layout":{"type":"default"}} -->
<div class="wp-block-group mp-giant mp-giant--page"><!-- wp:heading {"level":1,"className":"mp-giant__w"} -->
<h1 class="wp-block-heading mp-giant__w"><?php echo esc_html( moyooshi_productions_t( 'list_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-giant__s"} -->
<p class="mp-giant__s"><?php echo esc_html( moyooshi_productions_t( 'list_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"mp-posts","layout":{"type":"default"}} -->
<div class="wp-block-query mp-posts"><!-- wp:post-template {"className":"mp-jlist"} -->
<!-- wp:group {"className":"mp-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group mp-jrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"mp-jrow__img"} /-->

<!-- wp:post-date {"format":"( Y.m )","className":"mp-jrow__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"mp-jrow__t"} /-->

<!-- wp:post-terms {"term":"category","className":"mp-jrow__c"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( moyooshi_productions_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
