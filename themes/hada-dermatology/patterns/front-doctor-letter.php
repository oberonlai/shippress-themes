<?php
/**
 * Title: Home: a signed letter from the founder
 * Slug: hada-dermatology/front-doctor-letter
 * Categories: hada-dermatology
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three paragraphs signed by the founder with a small inset portrait on a band square.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-letter","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-letter"><!-- wp:group {"className":"hd-letter__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-letter__grid">
<!-- wp:group {"className":"hd-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group hd-letter__text">
<!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo wp_kses_post( hada_dermatology_t( 'k4271ae84' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hada_dermatology_t( 'k328b4d99' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hada_dermatology_t( 'k548abc08' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hada_dermatology_t( 'k8fab39ac' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hd-sign"} -->
<p class="hd-sign"><?php echo wp_kses_post( hada_dermatology_t( 'k49070037' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hd-letter__frame","layout":{"type":"default"}} -->
<div class="wp-block-group hd-letter__frame">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hd-letter__photo"} -->
<figure class="wp-block-image size-large hd-letter__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-reyes.webp' ) ); ?>" alt="<?php echo esc_attr( hada_dermatology_t( 'k2580a0d6' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
