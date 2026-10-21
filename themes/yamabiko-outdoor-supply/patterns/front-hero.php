<?php
/**
 * Title: Home: cover with info bar
 * Slug: yamabiko-outdoor-supply/front-hero
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Full-bleed photo, low-left headline, info bar, dash index.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"yb-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull yb-hero"><!-- wp:image {"sizeSlug":"full","className":"yb-hero__photo"} -->
<figure class="wp-block-image size-full yb-hero__photo"><img src="<?php echo esc_url( $yb . 'p01-hero.webp' ); ?>" alt="<?php echo esc_attr( yamabiko_outdoor_supply_t( 'ac552547a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__copy"><!-- wp:paragraph {"className":"yb-hero__label"} -->
<p class="yb-hero__label"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k57863307' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yb-hero__title"} -->
<h1 class="wp-block-heading yb-hero__title"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k46e26eda' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-hero__lead"} -->
<p class="yb-hero__lead"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k2c0f053e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yb-hero__actions"} -->
<div class="wp-block-buttons yb-hero__actions"><!-- wp:button {"className":"yb-btn-light"} -->
<div class="wp-block-button yb-btn-light"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kc2c8e9a4' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link yb-link-white"} -->
<div class="wp-block-button is-style-text-link yb-link-white"><a class="wp-block-button__link wp-element-button" href="/compare/"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k849acb77' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yb-info","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yb-info"><!-- wp:group {"className":"yb-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__in"><!-- wp:group {"className":"yb-info__cell yb-info__cell--open","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell yb-info__cell--open"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k40d179ee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kd0db5567' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k9f82518d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k68b2dc97' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k065ab3a2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kcf17ce6e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k4762fdc5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'ka651fed9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="yb-index" aria-label="<?php echo esc_attr( yamabiko_outdoor_supply_t( 'a23bc9bf3' ) ); ?>"><a href="#top" class="is-active" aria-current="location"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'ka4ffdcf0' ) ); ?></a><a href="#catalogue"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'ka8567ec8' ) ); ?></a><a href="#shelves"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kbb53c624' ) ); ?></a><a href="#compare"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k7eece51c' ) ); ?></a><a href="#tests"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k297eaa34' ) ); ?></a><a href="#workshop"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k8e5d9dbc' ) ); ?></a><a href="#stories"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'kcbb37401' ) ); ?></a><a href="#visit"><i></i><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k5e706a9b' ) ); ?></a></nav>
<!-- /wp:html -->
