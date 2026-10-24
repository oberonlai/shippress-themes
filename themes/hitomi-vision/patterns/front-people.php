<?php
/**
 * Title: Home: people
 * Slug: hitomi-vision/front-people
 * Categories: hitomi-vision
 * Keywords: optometry, director, team
 * Viewport Width: 1440
 * Description: A dome-topped section head, the director's note beside a 2:3 portrait, and the rest of the team as one line of names.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"hv-sec hv-dome","layout":{"type":"constrained"}} -->
<section id="people" class="wp-block-group alignfull hv-sec hv-dome"><!-- wp:group {"className":"hv-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title"} -->
<h2 class="wp-block-heading hv-head__title"><?php echo esc_html( hitomi_vision_t( 'w_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'w_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hv-portrait-row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-portrait-row"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"hv-portrait__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hv-portrait__photo sp-reveal sp-reveal--wipe"><img src="<?php echo $hv_img( 'p11-director.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_director' ) ); ?>" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hv-portrait__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-portrait__text sp-reveal sp-reveal--up"><!-- wp:separator {"className":"hv-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hv-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"hv-portrait__cap"} -->
<p class="hv-portrait__cap"><?php echo hitomi_vision_lines( 'w_cap' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-portrait__body"} -->
<p class="hv-portrait__body"><?php echo esc_html( hitomi_vision_t( 'w_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-sign"} -->
<p class="hv-sign"><?php echo esc_html( hitomi_vision_t( 'w_sign' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hv-names sp-reveal sp-reveal--up"} -->
<p class="hv-names"><?php echo esc_html( hitomi_vision_t( 'w_names' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
