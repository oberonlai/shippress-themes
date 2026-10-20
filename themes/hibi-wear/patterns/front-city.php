<?php
/**
 * Title: Home: in use
 * Slug: hibi-wear/front-city
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: A wide commute photograph, a pull line and two paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-city","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-city"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'ci_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h"} -->
<h2 class="wp-block-heading hw-h"><?php echo hibi_wear_lines( 'ci_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-city__img alignwide"} -->
<figure class="wp-block-image size-full hw-city__img alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s7-tram.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"hw-city__cols","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-city__cols"><!-- wp:paragraph {"className":"hw-pull"} -->
<p class="hw-pull"><?php echo esc_html( hibi_wear_t( 'ci_pull' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hw-city__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-city__text"><!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ci_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ci_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
