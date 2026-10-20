<?php
/**
 * Title: Notes: sign-up
 * Slug: nami-staffing/newsletter-signup
 * Categories: nami-staffing
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The notes sign-up beside a photograph of a kitchen team.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-head ns-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-head ns-section--last"><!-- wp:group {"align":"wide","className":"ns-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-split"><!-- wp:group {"className":"ns-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ns-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ns-head__title"} -->
<h1 class="wp-block-heading ns-head__title"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ns-form ns-form--row" action="#" method="post"><p class="ns-field"><label for="ns-letter"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_04' ) ); ?></label><input id="ns-letter" name="email" type="email" autocomplete="email"></p><p class="ns-field"><button type="submit"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ns-small"} -->
<p class="ns-small"><?php echo wp_kses_post( nami_staffing_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ns-split__photo ns-split__photo--tall"} -->
<figure class="wp-block-image size-large ns-split__photo ns-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
