<?php
/**
 * Title: How we build: page head
 * Slug: hagane-machinery/how-head
 * Categories: hagane-machinery
 * Keywords: build
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of the casting yard.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-head hm-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-head hm-head--photo"><!-- wp:group {"align":"wide","className":"hm-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-head__grid"><!-- wp:group {"className":"hm-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'home_steps_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-head__title"} -->
<h1 class="wp-block-heading hm-head__title"><?php echo wp_kses_post( hagane_machinery_t( 'how_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'how_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide hm-head__photo"} -->
<figure class="wp-block-image size-large alignwide hm-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/machinist-lathe.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'how_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hagane_machinery_t( 'how_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
