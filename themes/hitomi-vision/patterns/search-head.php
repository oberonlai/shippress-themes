<?php
/**
 * Title: Search head
 * Slug: hitomi-vision/search-head
 * Categories: hitomi-vision
 * Inserter: no
 * Description: A dome-topped page head for search results with the search box under it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-pagehead hv-dome","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-pagehead hv-dome"><!-- wp:query-title {"type":"search","level":1,"className":"hv-pagehead__title"} /-->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 's_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-pagehead__lede"} -->
<p class="hv-pagehead__lede"><?php echo esc_html( hitomi_vision_t( 's_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"search","className":"hv-search"} /--></section>
<!-- /wp:group -->
