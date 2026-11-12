<?php
/**
 * Title: Home: the college
 * Slug: tochi-academy/front-college
 * Categories: tochi-academy
 * Keywords: about, intro, history
 * Viewport Width: 1440
 * Description: Rail label and a 7/5 split: three narrative paragraphs left, a 4:5 photograph offset down on the right.
 */
?>
<!-- wp:group {"align":"full","className":"ta-sec ta-sec--college","anchor":"college","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ta-sec ta-sec--college" id="college"><!-- wp:group {"className":"ta-rail","layout":{"type":"default"}} -->
<div class="wp-block-group ta-rail"><!-- wp:paragraph {"className":"ta-rail__label"} -->
<p class="ta-rail__label"><?php echo wp_kses_post( tochi_academy_t( 'kf740e050' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-sec__body ta-split","layout":{"type":"default"}} -->
<div class="wp-block-group ta-sec__body ta-split"><!-- wp:group {"className":"ta-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__text"><!-- wp:paragraph {"className":"ta-label sp-reveal sp-reveal--mask"} -->
<p class="ta-label sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'kf740e050' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'k2ea6b0b4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k1b6363ce' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'ka39c0ccc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k2d1c6710' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ta-pill"} -->
<div class="wp-block-button ta-pill"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( tochi_academy_t( 'ke868507e' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-split__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ta-split__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ta-photo ta-photo--portrait"} -->
<figure class="wp-block-image size-full ta-photo ta-photo--portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P04.webp' ) ); ?>" alt="<?php echo esc_attr( tochi_academy_t( 'a3a806e13' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
