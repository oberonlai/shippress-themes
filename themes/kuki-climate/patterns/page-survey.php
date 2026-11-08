<?php
/**
 * Title: Page: Survey
 * Slug: kuki-climate/page-survey
 * Categories: kuki-climate
 * Keywords: page-survey
 * Viewport Width: 1440
 * Description: Head window, a pill toggle between the hour on site and the written report, a parallax photo band, what to have ready and a request band.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p06-survey-walk.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a32c950bd' ) ); ?>" src="<?php echo $kc_img( 'p06-survey-walk.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'k426b6b81' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'k48ac3278' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'k063a9964' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'ad08a9887' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:5"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:8"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo" style="--i:10"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'k7cc33e0d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k8c27b358' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-band-a kc-tog","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-band-a kc-tog"><!-- wp:group {"align":"wide","className":"kc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'kbb4dd0ae' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'k7bf4ce65' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pill" role="radiogroup" aria-label="<?php echo esc_attr( kuki_climate_t( 'a677a5b7d' ) ); ?>"><input type="radio" name="kc-sv" id="kc-sv-a" value="a" checked><label for="kc-sv-a"><?php echo wp_kses_post( kuki_climate_t( 'kf0444a6f' ) ); ?></label><span class="kc-pill__div" aria-hidden="true"></span><input type="radio" name="kc-sv" id="kc-sv-b" value="b"><label for="kc-sv-b"><?php echo wp_kses_post( kuki_climate_t( 'k90998f70' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"kc-panels","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-panels"><!-- wp:group {"className":"kc-pane kc-pane--a kc-pane--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pane kc-pane--a kc-pane--wide"><!-- wp:group {"className":"kc-timed","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed"><!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t">0–10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k9b299c14' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t">10–30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k5fc1b8dc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t">30–45</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k21438c39' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t">45–55</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k4b0b4f8e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t">55–60</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k2f99694b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-pane__note"} -->
<p class="kc-pane__note"><?php echo wp_kses_post( kuki_climate_t( 'k4281d5bd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-pane__note"} -->
<p class="kc-pane__note"><?php echo wp_kses_post( kuki_climate_t( 'k46eb7017' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-pane kc-pane--b kc-pane--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pane kc-pane--b kc-pane--wide"><!-- wp:list {"className":"kc-check"} -->
<ul class="wp-block-list kc-check"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k50b8287e' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k95295adf' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kd2572408' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kc1e5fe67' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kd7cc4c9d' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kad812611' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kc-pane__note"} -->
<p class="kc-pane__note"><?php echo wp_kses_post( kuki_climate_t( 'k124e8829' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-pane__note"} -->
<p class="kc-pane__note"><?php echo wp_kses_post( kuki_climate_t( 'k347d117e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo $kc_img( 'p11-duct-hatch.webp' ); ?>","dimRatio":20,"overlayColor":"iron","minHeight":420,"minHeightUnit":"px","align":"full","className":"kc-pband sp-parallax"} -->
<div class="wp-block-cover alignfull kc-pband sp-parallax" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a1513c76f' ) ); ?>" src="<?php echo $kc_img( 'p11-duct-hatch.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k9f0caf7e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k8b077331' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k32c3de2d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k5b1ed002' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k1eb7fbba' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kc-check kc-check--page"} -->
<ul class="wp-block-list kc-check kc-check--page"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k7b3dc306' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kde5fb343' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kead23976' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k7e9a82b3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo $kc_img( 'p15-rooftop-row.webp' ); ?>","dimRatio":80,"overlayColor":"iron","minHeight":480,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"kc-request kc-request--in sp-parallax"} -->
<div class="wp-block-cover alignfull kc-request kc-request--in sp-parallax" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'adf6f3e12' ) ); ?>" src="<?php echo $kc_img( 'p15-rooftop-row.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":2,"className":"kc-request__h"} -->
<h2 class="wp-block-heading has-text-align-center kc-request__h"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"kc-request__sub"} -->
<p class="has-text-align-center kc-request__sub"><?php echo wp_kses_post( kuki_climate_t( 'k80670f65' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-request__btn"} -->
<div class="wp-block-button kc-request__btn"><a class="wp-block-button__link wp-element-button" href="mailto:survey@kukiclimate.example?subject=Survey%20hour"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","className":"kc-request__tel"} -->
<p class="has-text-align-center kc-request__tel"><?php echo wp_kses_post( kuki_climate_t( 'k11d41b21' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
