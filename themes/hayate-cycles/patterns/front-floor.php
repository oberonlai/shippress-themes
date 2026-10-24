<?php
/**
 * Title: Home: on the floor
 * Slug: hayate-cycles/front-floor
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Three house-line bikes in three columns with name, category and price.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--floor","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--floor">
<!-- wp:group {"className":"hc-floor__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-floor__head">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'fl_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'fl_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-products sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-products sp-stagger">
<!-- wp:group {"className":"hc-product sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-product sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-product__img"} -->
<figure class="wp-block-image size-full hc-product__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1-city-8.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_p1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-product__cat"} -->
<p class="hc-product__cat"><?php echo esc_html( hayate_cycles_t( 'fl_1_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-product__name"} -->
<h3 class="wp-block-heading hc-product__name"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'fl_1_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-product__price"} -->
<p class="hc-product__price"><?php echo esc_html( hayate_cycles_t( 'fl_1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-product sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-product sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-product__img"} -->
<figure class="wp-block-image size-full hc-product__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2-gravel.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_p2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-product__cat"} -->
<p class="hc-product__cat"><?php echo esc_html( hayate_cycles_t( 'fl_2_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-product__name"} -->
<h3 class="wp-block-heading hc-product__name"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'fl_2_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-product__price"} -->
<p class="hc-product__price"><?php echo esc_html( hayate_cycles_t( 'fl_2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-product sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-product sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-product__img"} -->
<figure class="wp-block-image size-full hc-product__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p3-e-city.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_p3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hc-product__cat"} -->
<p class="hc-product__cat"><?php echo esc_html( hayate_cycles_t( 'fl_3_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hc-product__name"} -->
<h3 class="wp-block-heading hc-product__name"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'fl_3_n' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-product__price"} -->
<p class="hc-product__price"><?php echo esc_html( hayate_cycles_t( 'fl_3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-floor__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hc-floor__foot">
<!-- wp:paragraph {"className":"hc-floor__text"} -->
<p class="hc-floor__text"><?php echo esc_html( hayate_cycles_t( 'fl_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-floor__all"} -->
<p class="hc-floor__all"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'fl_all' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
