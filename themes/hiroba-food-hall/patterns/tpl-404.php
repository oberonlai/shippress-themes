<?php
/**
 * Title: 404
 * Slug: hiroba-food-hall/tpl-404
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pale head with a gold button home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-pagehead"><!-- wp:group {"className":"hb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pagehead__in"><!-- wp:paragraph {"className":"hb-caps hb-caps--page"} -->
<p class="hb-caps hb-caps--page"><?php echo esc_html( hiroba_t( 'nf_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-title","level":1} -->
<h1 class="wp-block-heading hb-title"><?php echo esc_html( hiroba_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-lead"} -->
<p class="hb-lead"><?php echo esc_html( hiroba_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold"} -->
<div class="wp-block-button hb-btn hb-btn--gold"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hiroba_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-arc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-arc"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
