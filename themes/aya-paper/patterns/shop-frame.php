<?php
/**
 * Title: Shop: small frame
 * Slug: aya-paper/shop-frame
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: A one-pixel frame, 280 px high, with three photographs and the contour line across the rules.
 */
?>
<!-- wp:group {"className":"ap-minifr__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ap-minifr__wrap">
<!-- wp:group {"className":"ap-frame ap-minifr","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame ap-minifr">
<!-- wp:group {"className":"ap-cells","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cells">
<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3.webp' ) ); ?>" alt="<?php echo esc_attr( "Stack of plain notebooks on a white shelf with spines facing out." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/w1.webp' ) ); ?>" alt="<?php echo esc_attr( "A hand holding a pale sheet up to a bright window." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1.webp' ) ); ?>" alt="<?php echo esc_attr( "From inside the shop, a customer entering through plain glazed doors." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<img class="ap-contour ap-contour--sm" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-contour.svg' ) ); ?>" alt="" aria-hidden="true" width="1360" height="776"/>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
