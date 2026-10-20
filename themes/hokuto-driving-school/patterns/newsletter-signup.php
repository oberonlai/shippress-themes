<?php
/**
 * Title: Newsletter: the Route Card
 * Slug: hokuto-driving-school/newsletter-signup
 * Categories: hokuto-driving-school
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The monthly newsletter sign-up beside a photograph of the frosty morning street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head hk-section--last"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form hk-form--row" action="#" method="post"><p class="hk-field"><label for="hk-letter"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_04' ) ); ?></label><input id="hk-letter" name="email" type="email" autocomplete="email"></p><p class="hk-field"><button type="submit"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo wp_kses_post( hokuto_driving_school_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--tall"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/frost.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
