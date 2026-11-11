<?php
/**
 * Title: Template: post cards on grey
 * Slug: tana-furniture/tpl-cards
 * Categories: tana-furniture
 * Inserter: no
 * Description: The posts of the current query as white photo-top cards in pairs on the grey band, with pagination.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band tf-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band tf-journal"><!-- wp:query {"queryId":21,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"tf-pair","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"tf-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"5/3","className":"tf-card__img"} /-->

<!-- wp:group {"className":"tf-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tf-card__body"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"tf-card__cat"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"className":"tf-card__title"} /-->

<!-- wp:post-date {"textAlign":"center","format":"j M Y","className":"tf-card__date"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
