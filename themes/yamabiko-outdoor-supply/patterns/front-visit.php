<?php
/**
 * Title: Home: visit the shop
 * Slug: yamabiko-outdoor-supply/front-visit
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Shop photo, welcome text, hours and address.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"yb-sec yb-visit","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull yb-sec yb-visit"><!-- wp:group {"className":"yb-wrap yb-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-visit__in"><!-- wp:image {"sizeSlug":"full","className":"yb-visit__photo"} -->
<figure class="wp-block-image size-full yb-visit__photo"><img src="<?php echo esc_url( $yb . 'p15-shop.webp' ); ?>" alt="<?php echo esc_attr( yamabiko_outdoor_supply_t( 'aee1099fe' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-visit__text"><!-- wp:paragraph {"className":"yb-label"} -->
<p class="yb-label"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kf0929274' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yb-h"} -->
<h2 class="wp-block-heading yb-h"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k6fca2a98' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k732d31d1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-hours"} -->
<p class="yb-hours"><span><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k81512ad5' ) ); ?></span> 10:00–19:00<br><span><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k13c7d2d7' ) ); ?></span> 09:00–18:00<br><span><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kef6572e4' ) ); ?></span> 10:00–16:00<br><span><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kfd29458a' ) ); ?></span> <?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k03f4a478' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k082ae946' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k7e95402d' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
