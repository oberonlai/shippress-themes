<?php
/**
 * Title: About: page head
 * Slug: kasumi-mortgage/about-head
 * Categories: kasumi-mortgage
 * Keywords: about
 * Viewport Width: 1440
 * Description: Label, title and a short paragraph beside a photograph of the adviser desk.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-head km-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-head km-head--photo"><!-- wp:group {"align":"wide","className":"km-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-head__grid"><!-- wp:group {"className":"km-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-head__title"} -->
<h1 class="wp-block-heading km-head__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide km-head__photo"} -->
<figure class="wp-block-image size-large alignwide km-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/adviser-desk.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( kasumi_mortgage_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
