<?php
/**
 * Title: Page: Prices and terms
 * Slug: kuki-climate/page-prices
 * Categories: kuki-climate
 * Keywords: page-prices
 * Viewport Width: 1440
 * Description: Head window, three term rows with flat number panels and a toggle that filters the full-width price table.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p16-service-van.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a5e7fb816' ) ); ?>" src="<?php echo $kc_img( 'p16-service-van.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker"><?php echo wp_kses_post( kuki_climate_t( 'k3d0977c4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-ptitle"} -->
<h1 class="wp-block-heading kc-h1 kc-ptitle"><?php echo wp_kses_post( kuki_climate_t( 'k242ac9dc' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label"><?php echo wp_kses_post( kuki_climate_t( 'k00f4b887' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="<?php echo esc_attr( kuki_climate_t( 'a16a623bf' ) ); ?>"><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k80061894' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k69691c7b' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:5"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kff44570a' ) ); ?></span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k7fc56270' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:8"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k5dbc98dc' ) ); ?></span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf1862177' ) ); ?></span></li><li class="kc-mo kc-mo--q" style="--i:10"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span><?php echo wp_kses_post( kuki_climate_t( 'k8d9c307c' ) ); ?></span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span><?php echo wp_kses_post( kuki_climate_t( 'kf623e75a' ) ); ?></span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note"><?php echo wp_kses_post( kuki_climate_t( 'k46ea1f59' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-intro-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-intro-wrap"><!-- wp:paragraph {"className":"kc-intro sp-reveal sp-reveal--up"} -->
<p class="kc-intro sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k35597f26' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'k6f1bf85c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'kfefebf30' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-rows sp-stagger"><!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#fees"><?php echo wp_kses_post( kuki_climate_t( 'k97b925c2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'ke3b2a6d5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k4de7905e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#fees"><?php echo wp_kses_post( kuki_climate_t( 'k3716d121' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--b"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'kdb6cdf31' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k9e57990b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-row__num"} -->
<p class="kc-row__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-row__text"} -->
<p class="kc-row__text"><a href="#fees"><?php echo wp_kses_post( kuki_climate_t( 'k0e485e23' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-chev" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"kc-row__panel kc-row__panel--a","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__panel kc-row__panel--a"><!-- wp:heading {"level":3,"className":"kc-row__title"} -->
<h3 class="wp-block-heading kc-row__title"><?php echo wp_kses_post( kuki_climate_t( 'kadc66a06' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-row__sub"} -->
<p class="kc-row__sub"><?php echo wp_kses_post( kuki_climate_t( 'k8bf9e23d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"kc-sec kc-band-a kc-tog kc-prices","layout":{"type":"constrained"}} -->
<section id="fees" class="wp-block-group alignfull kc-sec kc-band-a kc-tog kc-prices"><!-- wp:group {"align":"wide","className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'ke16dd6e1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'k28823fbb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pill" role="radiogroup" aria-label="<?php echo esc_attr( kuki_climate_t( 'a9e496039' ) ); ?>"><input type="radio" name="kc-pr" id="kc-pr-a" value="a" checked><label for="kc-pr-a"><?php echo wp_kses_post( kuki_climate_t( 'kbe92c627' ) ); ?></label><span class="kc-pill__div" aria-hidden="true"></span><input type="radio" name="kc-pr" id="kc-pr-b" value="b"><label for="kc-pr-b"><?php echo wp_kses_post( kuki_climate_t( 'k9030e39f' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"kc-panels","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-panels"><!-- wp:group {"className":"kc-pane kc-pane--a kc-pane--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pane kc-pane--a kc-pane--wide"><!-- wp:table {"align":"wide","className":"kc-table"} -->
<figure class="wp-block-table alignwide kc-table"><table><thead><tr><th><?php echo wp_kses_post( kuki_climate_t( 'k7d74f3b9' ) ); ?></th><th><?php echo wp_kses_post( kuki_climate_t( 'k41c7ffb2' ) ); ?></th><th><?php echo wp_kses_post( kuki_climate_t( 'k3601146c' ) ); ?></th></tr></thead><tbody>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'k31ccc097' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k46ff12fb' ) ); ?></td><td>€190</td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'k49e0036e' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k678aa5d7' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k11fc3fc8' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'kdb068acb' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'kf089d284' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'kde949fed' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'k7e372b64' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k6b26331f' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'ka36eb4e3' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'keab99ec6' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k9915a30f' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'ka3fbf638' ) ); ?></td></tr>
</tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-pane kc-pane--b kc-pane--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pane kc-pane--b kc-pane--wide"><!-- wp:table {"align":"wide","className":"kc-table"} -->
<figure class="wp-block-table alignwide kc-table"><table><thead><tr><th><?php echo wp_kses_post( kuki_climate_t( 'k7d74f3b9' ) ); ?></th><th><?php echo wp_kses_post( kuki_climate_t( 'k41c7ffb2' ) ); ?></th><th><?php echo wp_kses_post( kuki_climate_t( 'k3601146c' ) ); ?></th></tr></thead><tbody>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'k31ccc097' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k46ff12fb' ) ); ?></td><td>€190</td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'kc6793a5d' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k3ff04ab1' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'kf1a116e6' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'kb488986a' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'kc288061f' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k1fc63ae4' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'k85d17e18' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k295fd237' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'kd24686b4' ) ); ?></td></tr>
<tr><td><?php echo wp_kses_post( kuki_climate_t( 'keab99ec6' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'k9915a30f' ) ); ?></td><td><?php echo wp_kses_post( kuki_climate_t( 'ka3fbf638' ) ); ?></td></tr>
</tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-prices__note"} -->
<p class="kc-prices__note"><?php echo wp_kses_post( kuki_climate_t( 'ka301b317' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k3489add1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k05912d61' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k8658e4fe' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--in","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"align":"wide","className":"kc-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-split"><!-- wp:heading {"level":2,"className":"kc-split__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-split__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( kuki_climate_t( 'k8b5ab8a3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-split__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k78f589cd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k219c94fb' ) ); ?></p>
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
