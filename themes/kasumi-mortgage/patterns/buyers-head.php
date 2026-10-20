<?php
/**
 * Title: First-time buyers: page head
 * Slug: kasumi-mortgage/buyers-head
 * Categories: kasumi-mortgage
 * Keywords: nervous
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of a family in their first kitchen.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-head km-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-head km-head--photo"><!-- wp:group {"align":"wide","className":"km-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-head__grid"><!-- wp:group {"className":"km-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-head__title"} -->
<h1 class="wp-block-heading km-head__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide km-head__photo"} -->
<figure class="wp-block-image size-large alignwide km-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/new-kitchen-evening.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'buyers_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
