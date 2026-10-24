<?php
/**
 * Title: Home: visit
 * Slug: hitomi-vision/front-visit
 * Categories: hitomi-vision
 * Keywords: optometry, address, hours
 * Viewport Width: 1440
 * Description: A dome-topped section head, the clinic's front window at the left, and the address, the hours and the booking button at the right.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"hv-sec hv-sec--tall hv-dome","layout":{"type":"constrained"}} -->
<section id="visit" class="wp-block-group alignfull hv-sec hv-sec--tall hv-dome"><!-- wp:group {"className":"hv-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title"} -->
<h2 class="wp-block-heading hv-head__title"><?php echo esc_html( hitomi_vision_t( 'v_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'v_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-visit","layout":{"type":"default"}} -->
<div class="wp-block-group hv-visit"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"hv-visit__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hv-visit__photo sp-reveal sp-reveal--wipe"><img src="<?php echo $hv_img( 'p12-front.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_front' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hv-visit__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-visit__text sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'v_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="hv-hours-list"><?php for ( $hv_n = 1; $hv_n <= 4; $hv_n++ ) : ?><div><dt><?php echo esc_html( hitomi_vision_t( 'v_h' . $hv_n ) ); ?></dt><dd><?php echo esc_html( hitomi_vision_t( 'v_h' . $hv_n . 't' ) ); ?></dd></div><?php endfor; ?></dl>
<!-- /wp:html -->

<!-- wp:buttons {"className":"hv-btns"} -->
<div class="wp-block-buttons hv-btns"><!-- wp:button {"className":"hv-btn hv-btn--lg"} -->
<div class="wp-block-button hv-btn hv-btn--lg"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( hitomi_vision_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
