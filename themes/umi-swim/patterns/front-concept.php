<?php
/**
 * Title: Home: concept
 * Slug: umi-swim/front-concept
 * Categories: umi-swim
 * Keywords: swimming, school, lessons
 * Viewport Width: 1440
 * Description: White card bleeding off the left with a wide parallax photo.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"us-concept","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull us-concept">

<!-- wp:group {"className":"us-concept__card","layout":{"type":"default"}} -->
<div class="wp-block-group us-concept__card"><!-- wp:paragraph {"className":"us-label"} -->
<p class="us-label"><?php echo wp_kses_post( umi_swim_t( 'kb46c95e5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"us-h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading us-h sp-reveal sp-reveal--mask"><?php echo wp_kses_post( umi_swim_t( 'k38523b79' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( umi_swim_t( 'k861299e5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( umi_swim_t( 'k0b053b0e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-ulink"} -->
<p class="us-ulink"><a href="/about/"><?php echo wp_kses_post( umi_swim_t( 'kc76345cd' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"spPar":"6%","className":"us-concept__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group us-concept__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/c1.webp' ) ); ?>" alt="<?php echo esc_attr( umi_swim_t( 'a984189df' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
