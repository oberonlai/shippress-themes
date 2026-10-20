<?php
/**
 * Title: About: page head
 * Slug: nami-staffing/about-head
 * Categories: nami-staffing
 * Keywords: about, agency, history
 * Viewport Width: 1440
 * Description: Label, title and a short paragraph beside a photograph of the office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-head ns-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-head ns-head--photo"><!-- wp:group {"align":"wide","className":"ns-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-head__grid"><!-- wp:group {"className":"ns-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ns-head__title"} -->
<h1 class="wp-block-heading ns-head__title"><?php echo wp_kses_post( nami_staffing_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( nami_staffing_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide ns-head__photo"} -->
<figure class="wp-block-image size-large alignwide ns-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-wide.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( nami_staffing_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
