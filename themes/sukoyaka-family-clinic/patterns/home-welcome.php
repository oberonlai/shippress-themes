<?php
/**
 * Title: Home: a word from the founder
 * Slug: sukoyaka-family-clinic/home-welcome
 * Categories: sukoyaka-family-clinic
 * Keywords: about, story, welcome
 * Viewport Width: 1440
 * Description: Two narrative paragraphs from the founder beside a photograph of her consulting room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section"><!-- wp:group {"align":"wide","className":"sf-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-split__photo sf-split__photo--tall"} -->
<figure class="wp-block-image size-large sf-split__photo sf-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doctor-ellen.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sf-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sf-split__title"} -->
<h2 class="wp-block-heading sf-split__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-sign"} -->
<p class="sf-sign"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
