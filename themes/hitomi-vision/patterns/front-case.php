<?php
/**
 * Title: Home: corrected case
 * Slug: hitomi-vision/front-case
 * Categories: hitomi-vision
 * Keywords: optometry, case, polaroid
 * Viewport Width: 1440
 * Description: Two photographs on pale mats with handwritten-style captions, the right one 110 px higher than the left, and the case told in the person's own account beside them.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"case","className":"hv-sec hv-dome","layout":{"type":"constrained"}} -->
<section id="case" class="wp-block-group alignfull hv-sec hv-dome"><!-- wp:group {"className":"hv-polaroid-pair","layout":{"type":"default"}} -->
<div class="wp-block-group hv-polaroid-pair"><!-- wp:group {"className":"hv-polaroid-pair__cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hv-polaroid-pair__cards sp-stagger"><!-- wp:group {"className":"hv-polaroid hv-polaroid--a sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hv-polaroid hv-polaroid--a sp-reveal sp-reveal--wipe"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $hv_img( 'p09-case-before.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_case_a' ) ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hv-polaroid__cap"} -->
<p class="hv-polaroid__cap"><?php echo esc_html( hitomi_vision_t( 'k_cap_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-polaroid hv-polaroid--b sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hv-polaroid hv-polaroid--b sp-reveal sp-reveal--wipe"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $hv_img( 'p10-case-after.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_case_b' ) ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hv-polaroid__cap"} -->
<p class="hv-polaroid__cap"><?php echo esc_html( hitomi_vision_t( 'k_cap_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-case__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-case__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title hv-case__title"} -->
<h2 class="wp-block-heading hv-head__title hv-case__title"><?php echo esc_html( hitomi_vision_t( 'k_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub hv-case__sub"} -->
<p class="hv-head__sub hv-case__sub"><?php echo esc_html( hitomi_vision_t( 'k_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'k_text_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'k_text_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-textlink"} -->
<p class="hv-textlink"><a href="#case"><?php echo esc_html( hitomi_vision_t( 'k_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
