<?php
/**
 * Title: Newsletter: the Hagane Technical Letter
 * Slug: hagane-machinery/newsletter-signup
 * Categories: hagane-machinery
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The quarterly technical letter sign-up beside a photograph of a cylindrical grinder.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-head hm-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-head hm-section--last"><!-- wp:group {"align":"wide","className":"hm-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split"><!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-head__title"} -->
<h1 class="wp-block-heading hm-head__title"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hm-form hm-form--row" action="#" method="post"><p class="hm-field"><label for="hm-letter"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_04' ) ); ?></label><input id="hm-letter" name="email" type="email" autocomplete="email"></p><p class="hm-field"><button type="submit"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hm-small"} -->
<p class="hm-small"><?php echo wp_kses_post( hagane_machinery_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--tall"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grinder.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
