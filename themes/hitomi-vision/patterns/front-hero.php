<?php
/**
 * Title: Home: hero
 * Slug: hitomi-vision/front-hero
 * Categories: hitomi-vision
 * Keywords: optometry, clinic, hero
 * Viewport Width: 1440
 * Description: The headline on pale strips with a short lede and a booking button in the top half, a framed photograph window in the bottom half, and one faint backdrop word.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hv-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-hero"><!-- wp:paragraph {"className":"hv-clarity"} -->
<p class="hv-clarity" aria-hidden="true"><?php echo esc_html( hitomi_vision_t( 'hero_word' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"hv-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-hero__top"><!-- wp:group {"className":"hv-hero__title","layout":{"type":"default"}} -->
<div class="wp-block-group hv-hero__title"><!-- wp:heading {"level":1,"className":"hv-h1"} -->
<h1 class="wp-block-heading hv-h1"><?php echo hitomi_vision_lines( 'hero_h1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group hv-hero__side"><!-- wp:paragraph {"className":"hv-lede"} -->
<p class="hv-lede"><?php echo esc_html( hitomi_vision_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hv-hero__act","layout":{"type":"default"}} -->
<div class="wp-block-group hv-hero__act"><!-- wp:buttons {"className":"hv-btns"} -->
<div class="wp-block-buttons hv-btns"><!-- wp:button {"className":"hv-btn hv-btn--lg"} -->
<div class="wp-block-button hv-btn hv-btn--lg"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html( hitomi_vision_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hv-hours"} -->
<p class="hv-hours"><?php echo esc_html( hitomi_vision_t( 'hero_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hv-frame","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-frame"><!-- wp:cover {"url":"<?php echo $hv_img( 'p01-hero.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>","dimRatio":0,"focalPoint":{"x":0.4,"y":0.45},"minHeight":560,"isDark":false,"align":"wide","className":"hv-window sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light hv-window sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_hero' ) ); ?>" src="<?php echo $hv_img( 'p01-hero.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" style="object-position:40% 45%" data-object-fit="cover" data-object-position="40% 45%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hv-hero__cap"} -->
<p class="hv-hero__cap"><?php echo esc_html( hitomi_vision_t( 'hero_caption' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
