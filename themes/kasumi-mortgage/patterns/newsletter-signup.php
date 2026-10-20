<?php
/**
 * Title: Newsletter: the Route Card
 * Slug: kasumi-mortgage/newsletter-signup
 * Categories: kasumi-mortgage
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The monthly newsletter sign-up beside a photograph of the frosty morning street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-head km-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-head km-section--last"><!-- wp:group {"align":"wide","className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split"><!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-head__title"} -->
<h1 class="wp-block-heading km-head__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="km-form km-form--row" action="#" method="post"><p class="km-field"><label for="km-letter"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_04' ) ); ?></label><input id="km-letter" name="email" type="email" autocomplete="email"></p><p class="km-field"><button type="submit"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-small"} -->
<p class="km-small"><?php echo wp_kses_post( kasumi_mortgage_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--tall"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/moving-boxes.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
