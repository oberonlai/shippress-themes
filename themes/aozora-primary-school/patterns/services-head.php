<?php
/**
 * Title: A school day: page head
 * Slug: aozora-primary-school/services-head
 * Categories: aozora-primary-school
 * Keywords: school day
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of arrival at the school entrance.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-head ap-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-head ap-head--photo"><!-- wp:group {"align":"wide","className":"ap-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-head__grid"><!-- wp:group {"className":"ap-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ap-head__title"} -->
<h1 class="wp-block-heading ap-head__title"><?php echo wp_kses_post( aozora_primary_school_t( 'services_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( aozora_primary_school_t( 'services_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide ap-head__photo"} -->
<figure class="wp-block-image size-large alignwide ap-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-arrival.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( aozora_primary_school_t( 'services_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
