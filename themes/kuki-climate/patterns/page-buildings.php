<?php
/**
 * Title: Page: Buildings
 * Slug: kuki-climate/page-buildings
 * Categories: kuki-climate
 * Keywords: page-buildings
 * Viewport Width: 1440
 * Description: Head window and three expanded ledger rows, each followed by a 3:2 photograph and two paragraphs.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p07-coil-rinse.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a1074a4f5' ) ); ?>" src="<?php echo $kc_img( 'p07-coil-rinse.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'k31545a27' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'kd2d51cc0' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'kc17a9afe' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'a5da4f33c' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo" style="--i:2"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:5"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:8"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo" style="--i:10"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'k7aa46c1e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'kb6d5e7fa' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"offices","className":"kc-sec kc-sec--in kc-bsec","layout":{"type":"constrained"}} -->
<section id="offices" class="wp-block-group alignfull kc-sec kc-sec--in kc-bsec"><!-- wp:group {"align":"wide","className":"kc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-rows sp-stagger"><!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#offices"><?php echo wp_kses_post( kuki_climate_t( 'kedcd15cc' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'k6070f604' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k7bfd2466' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kc-bl","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-bl__img"} -->
<figure class="wp-block-image size-full kc-bl__img"><img src="<?php echo $kc_img( 'p13-office-building.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'a858ce24b' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-bl__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-bl__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k979031fe' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k1ce3119f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"retail","className":"kc-sec kc-sec--in kc-bsec","layout":{"type":"constrained"}} -->
<section id="retail" class="wp-block-group alignfull kc-sec kc-sec--in kc-bsec"><!-- wp:group {"align":"wide","className":"kc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-rows sp-stagger"><!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#retail"><?php echo wp_kses_post( kuki_climate_t( 'k0a17ec15' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--b"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'kdc510800' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k1013f92f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kc-bl","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-bl__img"} -->
<figure class="wp-block-image size-full kc-bl__img"><img src="<?php echo $kc_img( 'p18-hotel-lobby.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'a0a7c13dc' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-bl__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-bl__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kfacc4201' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kb0fa507b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"clinics","className":"kc-sec kc-sec--in kc-bsec","layout":{"type":"constrained"}} -->
<section id="clinics" class="wp-block-group alignfull kc-sec kc-sec--in kc-bsec"><!-- wp:group {"align":"wide","className":"kc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-rows sp-stagger"><!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#clinics"><?php echo wp_kses_post( kuki_climate_t( 'kccc5202c' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'ke35bcb9b' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k08cc9e39' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kc-bl","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-bl__img"} -->
<figure class="wp-block-image size-full kc-bl__img"><img src="<?php echo $kc_img( 'p17-classroom.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'a07f2ae77' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-bl__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-bl__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k7ac9df0e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kec3e074e' ) ); ?></p>
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
