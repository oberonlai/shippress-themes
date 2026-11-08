<?php
/**
 * Title: Home: what a year covers (quarterly or monthly toggle)
 * Slug: kuki-climate/front-covers
 * Categories: kuki-climate
 * Keywords: toggle, pill, tabs, covers
 * Viewport Width: 1440
 * Description: A full-bleed grey band with a centred pill toggle, Quarterly visits or Monthly visits, that swaps two panels (CSS only, no script).
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"covers","className":"kc-sec kc-covers","layout":{"type":"constrained"}} -->
<section id="covers" class="wp-block-group alignfull kc-sec kc-covers"><!-- wp:group {"align":"wide","className":"kc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo wp_kses_post( kuki_climate_t( 'k3c74d67f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo wp_kses_post( kuki_climate_t( 'kbae0627c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pill" role="radiogroup" aria-label="<?php echo esc_attr( kuki_climate_t( 'a9e496039' ) ); ?>"><input type="radio" name="kc-year" id="kc-q" checked><label for="kc-q"><?php echo wp_kses_post( kuki_climate_t( 'k00f4b887' ) ); ?></label><span class="kc-pill__div" aria-hidden="true"></span><input type="radio" name="kc-year" id="kc-m"><label for="kc-m"><?php echo wp_kses_post( kuki_climate_t( 'kace9ba00' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"kc-panels sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-panels sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-year-panel kc-year kc-year--q","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel kc-year kc-year--q"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-year-panel__img"} -->
<figure class="wp-block-image size-full kc-year-panel__img"><img src="<?php echo $kc_img( 'p04-filter-change.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'a592a8e9a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-year-panel__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel__body"><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo wp_kses_post( kuki_climate_t( 'k3b5a8bba' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kc-check"} -->
<ul class="wp-block-list kc-check"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k47b55a79' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kbf80ae75' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k5bba41f4' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'ke22c456b' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'ke355ea9b' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kc1068414' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kc-count"} -->
<p class="kc-count"><?php echo wp_kses_post( kuki_climate_t( 'k7b47ce11' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-year-panel kc-year kc-year--m","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel kc-year kc-year--m"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-year-panel__img"} -->
<figure class="wp-block-image size-full kc-year-panel__img"><img src="<?php echo $kc_img( 'p05-controls-cabinet.webp' ); ?>" alt="<?php echo esc_attr( kuki_climate_t( 'aad7a0682' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-year-panel__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-year-panel__body"><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo wp_kses_post( kuki_climate_t( 'k0ca0d80e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kc-check"} -->
<ul class="wp-block-list kc-check"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k9cf4d344' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k013571c7' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'ke8132ad9' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'k8af67aba' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'ka3335800' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kuki_climate_t( 'kc4b59715' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kc-count"} -->
<p class="kc-count"><?php echo wp_kses_post( kuki_climate_t( 'kfef7c43c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
