<?php
/**
 * Title: Parents' letter: sign-up
 * Slug: aozora-primary-school/newsletter-signup
 * Categories: aozora-primary-school
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The three-times-a-year parents' letter sign-up beside a photograph of a picture book.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-head ap-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-head ap-section--last"><!-- wp:group {"align":"wide","className":"ap-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-split"><!-- wp:group {"className":"ap-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ap-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ap-head__title"} -->
<h1 class="wp-block-heading ap-head__title"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ap-form ap-form--row" action="#" method="post"><p class="ap-field"><label for="ap-letter"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_04' ) ); ?></label><input id="ap-letter" name="email" type="email" autocomplete="email"></p><p class="ap-field"><button type="submit"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ap-small"} -->
<p class="ap-small"><?php echo wp_kses_post( aozora_primary_school_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-split__photo ap-split__photo--tall"} -->
<figure class="wp-block-image size-large ap-split__photo ap-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-reading.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
