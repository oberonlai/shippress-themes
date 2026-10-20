<?php
/**
 * Title: About: page head
 * Slug: sukoyaka-family-clinic/about-head
 * Categories: sukoyaka-family-clinic
 * Keywords: about
 * Viewport Width: 1440
 * Description: Label, title and a short paragraph beside a photograph of the waiting room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head sf-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head sf-head--photo"><!-- wp:group {"align":"wide","className":"sf-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-head__grid"><!-- wp:group {"className":"sf-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-head__title"} -->
<h1 class="wp-block-heading sf-head__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide sf-head__photo"} -->
<figure class="wp-block-image size-large alignwide sf-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting-room.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
