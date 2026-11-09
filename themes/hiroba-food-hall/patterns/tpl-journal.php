<?php
/**
 * Title: Journal: head and list
 * Slug: hiroba-food-hall/tpl-journal
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pale head, then every note as a card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-pagehead"><!-- wp:group {"className":"hb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pagehead__in"><!-- wp:paragraph {"className":"hb-caps hb-caps--page"} -->
<p class="hb-caps hb-caps--page"><?php echo esc_html( hiroba_t( 'journal_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-title","level":1} -->
<h1 class="wp-block-heading hb-title"><?php echo esc_html( hiroba_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-arc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-arc"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-list","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-list"><!-- wp:query {"queryId":23,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hb-notes__q hb-notes__q--index"} -->
<div class="wp-block-query hb-notes__q hb-notes__q--index"><!-- wp:post-template {"className":"hb-cards sp-stagger","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"hb-card hb-card--post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-card hb-card--post sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"hb-card__cover"} /-->

<!-- wp:group {"className":"hb-medal hb-medal--cat","layout":{"type":"default"}} -->
<div class="wp-block-group hb-medal hb-medal--cat"><!-- wp:post-terms {"term":"category","isLink":false,"className":"hb-medal__m"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-post__text"><!-- wp:post-title {"level":3,"isLink":true,"className":"hb-card__name"} /-->

<!-- wp:post-date {"format":"j F Y","className":"hb-post__date"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"hb-post__ex"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hb-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hiroba_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hiroba_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hiroba_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
