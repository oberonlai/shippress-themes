<?php
/**
 * Title: Newsletter: the Route Card
 * Slug: minato-business-hotel/newsletter-signup
 * Categories: minato-business-hotel
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The monthly newsletter sign-up beside a photograph of the frosty morning street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-head mb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-head mb-section--last"><!-- wp:group {"align":"wide","className":"mb-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split"><!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-head__title"} -->
<h1 class="wp-block-heading mb-head__title"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="mb-form mb-form--row" action="#" method="post"><p class="mb-field"><label for="mb-letter"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_04' ) ); ?></label><input id="mb-letter" name="email" type="email" autocomplete="email"></p><p class="mb-field"><button type="submit"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mb-small"} -->
<p class="mb-small"><?php echo wp_kses_post( minato_business_hotel_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--tall"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/corner-studio.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
