<?php
/**
 * Title: Home: problem
 * Slug: hitomi-vision/front-problem
 * Categories: hitomi-vision
 * Keywords: optometry, symptoms, portrait
 * Viewport Width: 1440
 * Description: A dome-topped section head, then two 2:3 portrait rows with a narrow caption column, the first with the photograph at the left and the second mirrored.
 */
$hv_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"problem","className":"hv-sec hv-dome","layout":{"type":"constrained"}} -->
<section id="problem" class="wp-block-group alignfull hv-sec hv-dome"><!-- wp:group {"className":"hv-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title"} -->
<h2 class="wp-block-heading hv-head__title"><?php echo esc_html( hitomi_vision_t( 'p_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'p_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hv-portrait-row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-portrait-row"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"hv-portrait__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hv-portrait__photo sp-reveal sp-reveal--wipe"><img src="<?php echo $hv_img( 'p02-office.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_office' ) ); ?>" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hv-portrait__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-portrait__text sp-reveal sp-reveal--up"><!-- wp:separator {"className":"hv-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hv-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"hv-portrait__cap"} -->
<p class="hv-portrait__cap"><?php echo hitomi_vision_lines( 'p_cap_a' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-portrait__body"} -->
<p class="hv-portrait__body"><?php echo esc_html( hitomi_vision_t( 'p_text_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","anchor":"school","className":"hv-portrait-row hv-portrait-row--mirror","layout":{"type":"default"}} -->
<div id="school" class="wp-block-group alignwide hv-portrait-row hv-portrait-row--mirror"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"hv-portrait__photo sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-large hv-portrait__photo sp-reveal sp-reveal--wipe"><img src="<?php echo $hv_img( 'p03-reading.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( hitomi_vision_t( 'alt_reading' ) ); ?>" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hv-portrait__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-portrait__text sp-reveal sp-reveal--up"><!-- wp:separator {"className":"hv-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hv-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3,"className":"hv-portrait__title"} -->
<h3 class="wp-block-heading hv-portrait__title"><?php echo esc_html( hitomi_vision_t( 'c_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-portrait__cap"} -->
<p class="hv-portrait__cap"><?php echo hitomi_vision_lines( 'c_cap' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-portrait__body"} -->
<p class="hv-portrait__body"><?php echo esc_html( hitomi_vision_t( 'c_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
