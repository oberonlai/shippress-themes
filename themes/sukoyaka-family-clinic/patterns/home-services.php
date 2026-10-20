<?php
/**
 * Title: Home: care for every age
 * Slug: sukoyaka-family-clinic/home-services
 * Categories: sukoyaka-family-clinic
 * Keywords: care, services
 * Viewport Width: 1440
 * Description: A paragraph on the kinds of care offered beside a photograph of a consulting room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section"><!-- wp:group {"align":"wide","className":"sf-split sf-split--flip sf-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-split sf-split--flip sf-split--top"><!-- wp:group {"className":"sf-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sf-split__title"} -->
<h2 class="wp-block-heading sf-split__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled sf-prices"} -->
<ul class="wp-block-list is-style-ruled sf-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-split__photo sf-split__photo--wide"} -->
<figure class="wp-block-image size-large sf-split__photo sf-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/exam-room.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_services_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
