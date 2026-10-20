<?php
/**
 * Title: Home: three fabrics
 * Slug: hibi-wear/front-fabrics
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: Asymmetric aligned masonry: one tall jersey photo, linen and merino stacked beside it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-fabrics","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-fabrics"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'fa_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h"} -->
<h2 class="wp-block-heading hw-h"><?php echo hibi_wear_lines( 'fa_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hw-fab","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-fab"><!-- wp:group {"className":"hw-fab__item hw-fab__item--tall","layout":{"type":"default"}} -->
<div class="wp-block-group hw-fab__item hw-fab__item--tall"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-fab__img"} -->
<figure class="wp-block-image size-full hw-fab__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-jersey.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-fab__name"} -->
<p class="hw-fab__name"><?php echo esc_html( hibi_wear_t( 'fa1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__meta"} -->
<p class="hw-fab__meta"><?php echo esc_html( hibi_wear_t( 'fa1_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__desc"} -->
<p class="hw-fab__desc"><?php echo esc_html( hibi_wear_t( 'fa1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-fab__item hw-fab__item--a","layout":{"type":"default"}} -->
<div class="wp-block-group hw-fab__item hw-fab__item--a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-fab__img"} -->
<figure class="wp-block-image size-full hw-fab__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s5-linen.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s5' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-fab__name"} -->
<p class="hw-fab__name"><?php echo esc_html( hibi_wear_t( 'fa2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__meta"} -->
<p class="hw-fab__meta"><?php echo esc_html( hibi_wear_t( 'fa2_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__desc"} -->
<p class="hw-fab__desc"><?php echo esc_html( hibi_wear_t( 'fa2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-fab__item hw-fab__item--b","layout":{"type":"default"}} -->
<div class="wp-block-group hw-fab__item hw-fab__item--b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-fab__img"} -->
<figure class="wp-block-image size-full hw-fab__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s6-merino.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s6' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-fab__name"} -->
<p class="hw-fab__name"><?php echo esc_html( hibi_wear_t( 'fa3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__meta"} -->
<p class="hw-fab__meta"><?php echo esc_html( hibi_wear_t( 'fa3_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-fab__desc"} -->
<p class="hw-fab__desc"><?php echo esc_html( hibi_wear_t( 'fa3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
