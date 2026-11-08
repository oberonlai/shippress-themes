<?php
/**
 * Title: Page: Seasonal checklist
 * Slug: kuki-climate/page-newsletter
 * Categories: kuki-climate
 * Keywords: page-newsletter
 * Viewport Width: 1440
 * Description: Head window with four mailing months marked, the signup form on a grey band and what each issue covers.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p10-gauge-hoses.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'ab1e43fa5' ) ); ?>" src="<?php echo $kc_img( 'p10-gauge-hoses.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'k60ad49a7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'kd628db88' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'k1287a579' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'a94498520' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:5"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:8"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:10"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'ka3f822d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k1ce5a6e4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-band-a","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-band-a"><!-- wp:group {"align":"wide","className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'ka286d999' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'kbc23435f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-signup-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-signup-wrap"><!-- wp:html -->
<form class="kc-signup" action="mailto:desk@kukiclimate.example?subject=Seasonal%20checklist" method="post" enctype="text/plain"><label for="kc-email"><?php echo wp_kses_post( kuki_climate_t( 'k19858445' ) ); ?></label><div class="kc-signup__line"><input type="email" id="kc-email" name="email" placeholder="<?php echo esc_attr( kuki_climate_t( 'a99971ac5' ) ); ?>" required><button type="submit"><?php echo wp_kses_post( kuki_climate_t( 'kdec39532' ) ); ?></button></div><p class="kc-signup__fine"><?php echo wp_kses_post( kuki_climate_t( 'k3047a59a' ) ); ?></p></form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k3c84c42c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k0918b329' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k136dfa57' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k3d652f0e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k866b8072' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kb221e496' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kb5841fc2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-request kc-request--solid","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-request kc-request--solid"><!-- wp:heading {"textAlign":"center","level":2,"className":"kc-request__h"} -->
<h2 class="wp-block-heading has-text-align-center kc-request__h"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"kc-request__sub"} -->
<p class="has-text-align-center kc-request__sub"><?php echo wp_kses_post( kuki_climate_t( 'k80670f65' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-request__btn"} -->
<div class="wp-block-button kc-request__btn"><a class="wp-block-button__link wp-element-button" href="/#request"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","className":"kc-request__tel"} -->
<p class="has-text-align-center kc-request__tel"><?php echo wp_kses_post( kuki_climate_t( 'k11d41b21' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
