<?php
/**
 * Title: Home: fees card in the mosaic
 * Slug: hocho-kyoshitsu/home-rates
 * Categories: hocho-kyoshitsu
 * Keywords: cooking school, washoku
 * Viewport Width: 1440
 * Description: The synced fees card beside a sketch of the school kitchen.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-mosaic hk-mosaic--fees", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull hk-mosaic hk-mosaic--fees"><!-- wp:group {"className": "hk-card hk-card--photo hk-card--studio", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--photo hk-card--studio"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="Pencil sketch of the school kitchen: long wooden counters, hanging pans and a blue noren"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "hk-card__label"} -->
<p class="hk-card__label">Eight counters, one teacher, one assistant.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-card hk-card--fees", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--fees"><!-- wp:pattern {"slug":"hocho-kyoshitsu/prices"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
