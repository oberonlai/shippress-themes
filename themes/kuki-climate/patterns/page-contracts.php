<?php
/**
 * Title: Page: Contracts
 * Slug: kuki-climate/page-contracts
 * Categories: kuki-climate
 * Keywords: page-contracts
 * Viewport Width: 1440
 * Description: Head window with quarterly dots, a pill toggle swapping the quarterly and monthly year, and what is not covered.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p03-plant-room.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a691afa76' ) ); ?>" src="<?php echo $kc_img( 'p03-plant-room.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'k51735e69' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'ka9b66b76' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'kcc65538b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'a506f763f' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:5"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:8"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:10"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'k1f60e2bd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k2a572a96' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-band-a kc-tog","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-band-a kc-tog"><!-- wp:group {"align":"wide","className":"kc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'kd7e637a6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'kab7cf06d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pill" role="radiogroup" aria-label="<?php echo esc_attr( kuki_climate_t( 'a9e496039' ) ); ?>"><input type="radio" name="kc-ct" id="kc-ct-a" value="a" checked><label for="kc-ct-a"><?php echo wp_kses_post( kuki_climate_t( 'k00f4b887' ) ); ?></label><span class="kc-pill__div" aria-hidden="true"></span><input type="radio" name="kc-ct" id="kc-ct-b" value="b"><label for="kc-ct-b"><?php echo wp_kses_post( kuki_climate_t( 'kace9ba00' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"kc-panels","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-panels"><!-- wp:group {"className":"kc-year-panel kc-pane kc-pane--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel kc-pane kc-pane--a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-year-panel__img"} -->
<figure class="wp-block-image size-full kc-year-panel__img"><img src="<?php echo $kc_img( 'p04-filter-change.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'afad990a3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-year-panel__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel__body"><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo wp_kses_post( kuki_climate_t( 'kc4085e4a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-timed kc-sched","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed kc-sched"><!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'kfa3e5eda' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kfb1471ac' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k688937cc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k16e8aa1f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'kcc5d9056' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd3d884e8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k7e823b37' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'ka3c34b99' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-count"} -->
<p class="kc-count"><?php echo wp_kses_post( kuki_climate_t( 'kc8c9406e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-year-panel kc-pane kc-pane--b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel kc-pane kc-pane--b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-year-panel__img"} -->
<figure class="wp-block-image size-full kc-year-panel__img"><img src="<?php echo $kc_img( 'p05-controls-cabinet.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'abaf82c25' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-year-panel__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel__body"><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo wp_kses_post( kuki_climate_t( 'k5d2cf88b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-timed kc-sched","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed kc-sched"><!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k86f5978d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k659e59f0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'kfa3e5eda' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k30db07f6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k3fcf026b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k195fbb57' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k688937cc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kce905686' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k1b539f6f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k41ba7089' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'kcc5d9056' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k11cd6399' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'keca60ae8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k7e823b37' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'k3ed292b6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-timed__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-timed__row"><!-- wp:paragraph {"className":"kc-timed__t"} -->
<p class="kc-timed__t"><?php echo wp_kses_post( kuki_climate_t( 'k82331503' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-timed__x"} -->
<p class="kc-timed__x"><?php echo wp_kses_post( kuki_climate_t( 'kd771306a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-count"} -->
<p class="kc-count"><?php echo wp_kses_post( kuki_climate_t( 'k15044ed0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k24ff5af2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k9a42c34d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k078b2a22' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k281c9da5' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k8de71481' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kfa81966f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k1eb6d0c3' ) ); ?></p>
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
