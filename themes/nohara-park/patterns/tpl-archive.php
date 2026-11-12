<?php
/**
 * Title: Template: archive
 * Slug: nohara-park/tpl-archive
 * Categories: nohara-park
 * Inserter: no
 * Viewport Width: 1440
 * Description: Archive: pale band with the straddling title and caption-panel cards.
 */
?>
<!-- wp:group {"align":"full","className":"np-headband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-headband"><!-- wp:query-title {"type":"archive","level":1,"className":"np-h1 np-h1--band"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"np-sec np-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-sec np-sec--page"><!-- wp:group {"className":"np-wrap np-wrap--cards","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--cards"><!-- wp:query {"queryId":2,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"np-journal"} -->
<div class="wp-block-query np-journal"><!-- wp:post-template {"className":"np-cards","layout":{"type":"default"}} -->
<!-- wp:group {"className":"np-card","layout":{"type":"default"}} -->
<div class="wp-block-group np-card"><!-- wp:post-featured-image {"isLink":true,"className":"np-card__pic"} /-->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:post-terms {"term":"category","className":"np-badge"} /-->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:post-date {"className":"np-card__line"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"np-card__title"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'tpl_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"className":"np-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
