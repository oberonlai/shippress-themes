<?php
/**
 * Title: Home: families band
 * Slug: sukoyaka-family-clinic/home-buyers
 * Categories: sukoyaka-family-clinic
 * Keywords: families, patients
 * Viewport Width: 1440
 * Description: A band with a photograph of a parent and child, a paragraph and a patient quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section sf-band sf-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section sf-band sf-band--slate"><!-- wp:group {"align":"wide","className":"sf-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-split__photo sf-split__photo--land"} -->
<figure class="wp-block-image size-large sf-split__photo sf-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teen-consult.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'home_buyers_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sf-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sf-split__title"} -->
<h2 class="wp-block-heading sf-split__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/vaccinations-and-checks/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_buyers_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
