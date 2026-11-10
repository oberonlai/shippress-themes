<?php
/**
 * Title: Home: guest notes
 * Slug: hiroba-food-hall/front-notes
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Grey band with the two latest journal posts as cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-sec--grey hb-notes","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-sec--grey hb-notes"><!-- wp:group {"className":"hb-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hb-lockup"><!-- wp:paragraph {"className":"hb-caps"} -->
<p class="hb-caps"><?php echo esc_html( hiroba_t( 'caps_notes' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-sub"} -->
<p class="hb-sub"><?php echo esc_html( hiroba_t( 'sub_notes' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-statement"} -->
<h2 class="wp-block-heading hb-statement"><?php echo hiroba_gold( 'st_notes' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-intro"} -->
<p class="hb-intro"><?php echo esc_html( hiroba_t( 'notes_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":21,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hb-notes__q"} -->
<div class="wp-block-query hb-notes__q"><!-- wp:post-template {"className":"hb-cards sp-stagger","layout":{"type":"grid","columnCount":2}} -->
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

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hiroba_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"hb-more"} -->
<p class="hb-more"><a href="/journal/"><?php echo esc_html( hiroba_t( 'all_notes' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
