<?php
/**
 * Title: Journal entry
 * Slug: hibi-wear/tpl-single
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category as the dot label, title, date, a rounded photo straddling the band, the text and the neighbouring entries.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hw-sec hw-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hw-sec hw-article"><!-- wp:group {"align":"wide","className":"hw-head hw-head--article","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head hw-head--article"><!-- wp:post-terms {"term":"category","className":"hw-label hw-label--terms"} /-->

<!-- wp:post-title {"level":1,"className":"hw-h hw-h--article"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"hw-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hw-t2 hw-t2--post","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-t2 hw-t2--post"><!-- wp:post-featured-image {"aspectRatio":"3/2","className":"hw-t2__photo hw-t2__photo--post"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"hw-prose__col","layout":{"type":"constrained"}} /-->

<!-- wp:group {"align":"wide","className":"hw-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hw-tags"} /-->

<!-- wp:group {"className":"hw-post-nav","layout":{"type":"default"}} -->
<div class="wp-block-group hw-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hibi_wear_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hibi_wear_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
