<?php
/**
 * Title: About: page head
 * Slug: hagane-machinery/about-head
 * Categories: hagane-machinery
 * Keywords: about
 * Viewport Width: 1440
 * Description: Label, title and a short paragraph beside a photograph of the machining hall.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-head hm-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-head hm-head--photo"><!-- wp:group {"align":"wide","className":"hm-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-head__grid"><!-- wp:group {"className":"hm-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-head__title"} -->
<h1 class="wp-block-heading hm-head__title"><?php echo wp_kses_post( hagane_machinery_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide hm-head__photo"} -->
<figure class="wp-block-image size-large alignwide hm-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-plant.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hagane_machinery_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
