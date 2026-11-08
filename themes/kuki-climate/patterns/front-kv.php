<?php
/**
 * Title: Home: framed window, year line and ride-over card
 * Slug: kuki-climate/front-kv
 * Categories: kuki-climate
 * Keywords: hero, window, year, concept
 * Viewport Width: 1440
 * Description: An iron frame holding a dimmed rooftop photograph with the giant light title bottom-left, a twelve-month year line with visit dots under it, and an iron card that rides over the pinned window on scroll.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-kv","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-kv"><!-- wp:group {"align":"full","className":"kc-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-hero"><!-- wp:cover {"url":"<?php echo $kc_img( 'p01-rooftop-condenser.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":628,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window" style="min-height:628px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a9eb65e33' ) ); ?>" src="<?php echo $kc_img( 'p01-rooftop-condenser.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'ka13734dd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo wp_kses_post( kuki_climate_t( 'kfd7e0375' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ybar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'kcc65538b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'a31451d3a' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:5"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:8"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:10"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ybar__cta","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__cta"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#request"><?php echo wp_kses_post( kuki_climate_t( 'k80c1822d' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-ybar__note"} -->
<p class="kc-ybar__note"><?php echo wp_kses_post( kuki_climate_t( 'k23af7710' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"year","className":"kc-concept","layout":{"type":"default"}} -->
<div id="year" class="wp-block-group alignfull kc-concept"><!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:heading {"level":2,"className":"kc-card__h"} -->
<h2 class="wp-block-heading kc-card__h"><?php echo wp_kses_post( kuki_climate_t( 'kc06046de' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kuki_climate_t( 'k7a74f6cc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img"} -->
<figure class="wp-block-image size-full kc-card__img"><img src="<?php echo $kc_img( 'p02-service-log.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'a7efa2d28' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k0f516e06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k3af24f04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k36e94ea7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__sign"} -->
<p class="kc-card__sign"><?php echo wp_kses_post( kuki_climate_t( 'k88011e43' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
