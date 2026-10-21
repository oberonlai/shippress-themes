<?php
/**
 * Title: Home: rental and repair price list
 * Slug: yamabiko-outdoor-supply/front-workshop
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Rental and repair prices beside a short intro.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"workshop","className":"yb-sec yb-work","layout":{"type":"default"}} -->
<section id="workshop" class="wp-block-group alignfull yb-sec yb-work"><!-- wp:group {"className":"yb-wrap yb-work__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-work__in"><!-- wp:group {"className":"yb-work__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-work__text"><!-- wp:image {"sizeSlug":"full","className":"yb-work__photo"} -->
<figure class="wp-block-image size-full yb-work__photo"><img src="<?php echo esc_url( $yb . 'p17-patch.webp' ); ?>" alt="<?php echo esc_attr( yamabiko_outdoor_supply_t( 'a1e48a701' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yb-label"} -->
<p class="yb-label"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k56af653c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yb-h"} -->
<h2 class="wp-block-heading yb-h"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k59e7f614' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k89563888' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-arrow-link"} -->
<p class="yb-arrow-link"><a href="/rental/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kb4437133' ) ); ?></a> &nbsp; <a href="/workshop/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kf7eef2af' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="yb-prices"><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k2d1f422a' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k212e009f' ) ); ?></i></span><em>€38</em></li><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k639f15f6' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kf1d63156' ) ); ?></i></span><em>€72</em></li><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k36a6c7e9' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kb66b9754' ) ); ?></i></span><em>€29</em></li><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k64c4b419' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'ka3d9f84d' ) ); ?></i></span><em>€45</em></li><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k0eba8da4' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k667e15dd' ) ); ?></i></span><em>€18</em></li><li><span><b><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k18a63b64' ) ); ?></b><i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k78c532c0' ) ); ?></i></span><em>€35</em></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
