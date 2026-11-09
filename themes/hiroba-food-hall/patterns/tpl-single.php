<?php
/**
 * Title: Single post
 * Slug: hiroba-food-hall/tpl-single
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pale head with category, title and date, the featured photo, then the text.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-pagehead hb-pagehead--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-pagehead hb-pagehead--photo"><!-- wp:group {"className":"hb-pwin","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pwin"><!-- wp:post-featured-image {"aspectRatio":"21/9","className":"hb-pwin__img"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-pagehead__in"><!-- wp:post-terms {"term":"category","isLink":false,"className":"hb-caps hb-caps--page"} /-->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:post-title {"level":1,"className":"hb-title"} /-->

<!-- wp:post-date {"format":"j F Y","className":"hb-post__date"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-arc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-arc"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-prose","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-prose"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></section>
<!-- /wp:group -->
