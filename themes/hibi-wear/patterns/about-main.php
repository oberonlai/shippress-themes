<?php
/**
 * Title: About: story
 * Slug: hibi-wear/about-main
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: Three narrative sections with a wide photograph between the second and the third.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-prose","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-prose"><!-- wp:group {"className":"hw-prose__col","layout":{"type":"default"}} -->
<div class="wp-block-group hw-prose__col"><!-- wp:heading {"className":"hw-h hw-h--sub"} -->
<h2 class="wp-block-heading hw-h hw-h--sub"><?php echo esc_html( hibi_wear_t( 'ab_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t1a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t1b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-prose","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-prose"><!-- wp:group {"className":"hw-prose__col","layout":{"type":"default"}} -->
<div class="wp-block-group hw-prose__col"><!-- wp:heading {"className":"hw-h hw-h--sub"} -->
<h2 class="wp-block-heading hw-h hw-h--sub"><?php echo esc_html( hibi_wear_t( 'ab_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t2a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t2b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-widephoto","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-widephoto"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-city__img alignwide"} -->
<figure class="wp-block-image size-full hw-city__img alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s7-tram.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s7' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-prose","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-prose"><!-- wp:group {"className":"hw-prose__col","layout":{"type":"default"}} -->
<div class="wp-block-group hw-prose__col"><!-- wp:heading {"className":"hw-h hw-h--sub"} -->
<h2 class="wp-block-heading hw-h hw-h--sub"><?php echo esc_html( hibi_wear_t( 'ab_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t3a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ab_t3b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-t2sec hw-closeline","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-t2sec hw-closeline"><!-- wp:group {"align":"wide","className":"hw-closeline__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-closeline__in"><!-- wp:heading {"className":"hw-h hw-h--s"} -->
<h2 class="wp-block-heading hw-h hw-h--s"><?php echo esc_html( hibi_wear_t( 'ab_close' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/contact/" aria-label="<?php echo esc_attr( hibi_wear_t( 'ab_close_go' ) ); ?>">→</a><a class="hw-go__text" href="/contact/"><?php echo esc_html( hibi_wear_t( 'ab_close_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
