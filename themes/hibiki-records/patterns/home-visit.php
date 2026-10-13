<?php
/**
 * Title: Home: shop details and hours
 * Slug: hibiki-records/home-visit
 * Categories: hibiki-records
 * Keywords: records, vinyl
 * Viewport Width: 1440
 * Description: The shop details card and the week's opening hours, both from Appearance > Shop details, beside the street photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section"><!-- wp:group {"align":"wide","className":"hb-visit","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-visit"><!-- wp:group {"className":"hb-stack hb-visit__hours","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack hb-visit__hours"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">At the end of <em>the narrow lane.</em></h2>
<!-- /wp:heading -->

<!-- wp:hibiki-records/shop-info {"show":"state"} /-->

<!-- wp:hibiki-records/shop-info {"show":"week"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-card hb-visit__card","layout":{"type":"default"}} -->
<div class="wp-block-group hb-card hb-visit__card"><!-- wp:hibiki-records/shop-info {"show":"card"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"hb-visit__photo"} -->
<figure class="wp-block-image size-large hb-visit__photo"><img src="{{theme}}/assets/images/street.jpg" alt="The Hibiki Records shopfront at the end of a narrow lane in Sakanoue-cho, sleeves in the window"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
