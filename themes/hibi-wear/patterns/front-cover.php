<?php
/**
 * Title: Home: cover
 * Slug: hibi-wear/front-cover
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: Full-bleed hazy morning photo with small captions at the left and right thirds and a vertical scroll rule.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-cover","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-cover"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-cover__img"} -->
<figure class="wp-block-image size-full hw-cover__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1-cover.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_cover' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hw-cover__caps","layout":{"type":"default"}} -->
<div class="wp-block-group hw-cover__caps"><!-- wp:group {"className":"hw-cap hw-cap--l","layout":{"type":"default"}} -->
<div class="wp-block-group hw-cap hw-cap--l"><!-- wp:paragraph {"className":"hw-cap__a"} -->
<p class="hw-cap__a"><?php echo esc_html( hibi_wear_t( 'cap_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-cap__b"} -->
<p class="hw-cap__b"><?php echo esc_html( hibi_wear_t( 'cap_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-cap hw-cap--r","layout":{"type":"default"}} -->
<div class="wp-block-group hw-cap hw-cap--r"><!-- wp:paragraph {"className":"hw-cap__mark"} -->
<p class="hw-cap__mark"><?php echo esc_html( hibi_wear_t( 'cap_r_mark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-cap__sub"} -->
<p class="hw-cap__sub"><?php echo esc_html( hibi_wear_t( 'cap_r_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-cap__link"} -->
<p class="hw-cap__link"><a href="/shop/"><?php echo esc_html( hibi_wear_t( 'cap_r_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-cue","layout":{"type":"default"}} -->
<div class="wp-block-group hw-cue"><!-- wp:paragraph {"className":"hw-cue__word"} -->
<p class="hw-cue__word"><?php echo esc_html( hibi_wear_t( 'scroll' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hw-cue__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hw-cue__rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
