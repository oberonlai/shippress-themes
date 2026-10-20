<?php
/**
 * Title: Newsletter: the clinic letter
 * Slug: sukoyaka-family-clinic/newsletter-signup
 * Categories: sukoyaka-family-clinic
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The quarterly clinic letter sign-up beside a photograph of a nurse with a patient.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head sf-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head sf-section--last"><!-- wp:group {"align":"wide","className":"sf-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-split"><!-- wp:group {"className":"sf-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-head__title"} -->
<h1 class="wp-block-heading sf-head__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sf-form sf-form--row" action="#" method="post"><p class="sf-field"><label for="sf-letter"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_04' ) ); ?></label><input id="sf-letter" name="email" type="email" autocomplete="email"></p><p class="sf-field"><button type="submit"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sf-small"} -->
<p class="sf-small"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-split__photo sf-split__photo--tall"} -->
<figure class="wp-block-image size-large sf-split__photo sf-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/health-check.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
