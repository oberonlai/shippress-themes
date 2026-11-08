<?php
/**
 * Title: Page: Contact
 * Slug: kuki-climate/page-contact
 * Categories: kuki-climate
 * Keywords: page-contact
 * Viewport Width: 1440
 * Description: Head window, three contact rows with flat panels holding the address of each desk, then depot, hours and out-of-hours text.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p15-rooftop-row.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'adf6f3e12' ) ); ?>" src="<?php echo $kc_img( 'p15-rooftop-row.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'ka3558e47' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'k7629e6e0' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'k1cd8ede2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'ad5fe509c' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo" style="--i:2"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:5"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:8"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo" style="--i:10"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'k698886e0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k82a7219e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'k5b351047' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'kefa034fb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-rows sp-stagger"><!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="mailto:survey@kukiclimate.example"><?php echo wp_kses_post( kuki_climate_t( 'kee6093dc' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title kc-row__title--mail"} -->
<h3 class="wp-block-heading kc-row__title kc-row__title--mail"><?php echo wp_kses_post( kuki_climate_t( 'k5e675969' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'kd99df5d6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="mailto:desk@kukiclimate.example"><?php echo wp_kses_post( kuki_climate_t( 'k2958b70e' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--b"><!-- wp:heading {"level":3,"className":"kc-row__title kc-row__title--mail"} -->
<h3 class="wp-block-heading kc-row__title kc-row__title--mail"><?php echo wp_kses_post( kuki_climate_t( 'k6ce5b014' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'kcd9682fd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="mailto:accounts@kukiclimate.example"><?php echo wp_kses_post( kuki_climate_t( 'k16945042' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title kc-row__title--mail"} -->
<h3 class="wp-block-heading kc-row__title kc-row__title--mail"><?php echo wp_kses_post( kuki_climate_t( 'kcd83dfa0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'ka5a2ccc8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k3d6c64ce' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k4fd097b9' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kc13308bd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k2740c92b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'ke4881546' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k2fed7051' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'kfcae5cd1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k80ee9abc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k608f6916' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k2b95115f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k717107e9' ) ); ?></p>
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
