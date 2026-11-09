<?php
/**
 * Title: Home: teaching hotel band
 * Slug: okami-college/front-house
 * Categories: okami-college
 * Keywords: college, hotel, school
 * Viewport Width: 1440
 * Description: Full-bleed photograph of the teaching hotel with a slow parallax; copy and a white outline pill stay still at the left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/t2-house.webp' ) ); ?>","dimRatio":30,"className":"ok-house sp-parallax alignfull","layout":{"type":"constrained"}} -->
<div class="wp-block-cover ok-house sp-parallax alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( okami_college_t( 'a042b2528' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/t2-house.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ok-house__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ok-house__copy"><!-- wp:paragraph {"className":"ok-label ok-label--light"} -->
<p class="ok-label ok-label--light"><?php echo wp_kses_post( okami_college_t( 'k49354b45' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ok-h2 ok-h2--left ok-h2--light"} -->
<h2 class="wp-block-heading ok-h2 ok-h2--left ok-h2--light"><?php echo wp_kses_post( okami_college_t( 'k3648591b' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ok-house__text"} -->
<p class="ok-house__text"><?php echo wp_kses_post( okami_college_t( 'k3dcf624d' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"ok-pills","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ok-pills"><!-- wp:button {"className":"is-style-outline ok-pill ok-pill--light"} -->
<div class="wp-block-button is-style-outline ok-pill ok-pill--light"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( okami_college_t( 'kbea3c9a3' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
