<?php
/**
 * Title: Monthly notes: sign-up
 * Slug: kagi-security/newsletter-signup
 * Categories: kagi-security
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The monthly notes sign-up beside a photograph of a desk.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head ks-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head ks-section--last"><!-- wp:group {"align":"wide","className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split"><!-- wp:group {"className":"ks-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ks-form ks-form--row" action="#" method="post"><p class="ks-field"><label for="ks-letter"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_04' ) ); ?></label><input id="ks-letter" name="email" type="email" autocomplete="email"></p><p class="ks-field"><button type="submit"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small"><?php echo wp_kses_post( kagi_security_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ks-split__photo ks-split__photo--tall"} -->
<figure class="wp-block-image size-large ks-split__photo ks-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-detail.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
