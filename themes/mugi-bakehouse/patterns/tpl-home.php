<?php
/**
 * Title: Template: journal
 * Slug: mugi-bakehouse/tpl-home
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"mb-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-pagehead"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:paragraph {"className":"mb-label"} -->
<p class="mb-label">Day book</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-h1"} -->
<h1 class="wp-block-heading mb-h1">Notes from the bench.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-standfirst"} -->
<p class="mb-standfirst">Seasonal grain, oven logs and street dispatches from 9 Spelt Yard.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="mb-mpills"><a href="<?php echo esc_url( home_url( '/loaves/' ) ); ?>">Bread<span class="mb-arrow" aria-hidden="true"></span></a><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Notes<span class="mb-arrow" aria-hidden="true"></span></a></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mb-listing","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-listing"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"mb-notes__q mb-notes__q--list"} -->
<div class="wp-block-query mb-notes__q mb-notes__q--list"><!-- wp:post-template -->
<!-- wp:group {"className":"mb-note mb-note--t","layout":{"type":"default"}} -->
<div class="wp-block-group mb-note mb-note--t"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

<!-- wp:group {"className":"mb-note__body","layout":{"type":"default"}} -->
<div class="wp-block-group mb-note__body"><!-- wp:group {"className":"mb-note__row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mb-note__row"><!-- wp:post-date {"format":"d M Y","className":"mb-note__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mb-note__t"} /-->

<!-- wp:post-terms {"term":"category","className":"mb-note__c"} /-->

<!-- wp:html -->
<span class="mb-arrow" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"mb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity mb-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mb-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
