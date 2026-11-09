<?php
/**
 * Title: Page: head and content
 * Slug: hiroba-food-hall/tpl-page
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pale head with the page title, arc, then the content.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-pagehead"><!-- wp:group {"className":"hb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pagehead__in"><!-- wp:paragraph {"className":"hb-caps hb-caps--page"} -->
<p class="hb-caps hb-caps--page"><?php echo esc_html( hiroba_t( 'page_caps' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:post-title {"level":1,"className":"hb-title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-arc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-arc"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-prose","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-prose"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></section>
<!-- /wp:group -->
