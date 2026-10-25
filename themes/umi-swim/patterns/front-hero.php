<?php
/**
 * Title: Home: hero
 * Slug: umi-swim/front-hero
 * Categories: umi-swim
 * Keywords: swimming, school, lessons
 * Viewport Width: 1440
 * Description: Blob-masked pool photo with a translucent water blob, wordmark, vertical lead and info bar.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","spPar":"8%","className":"us-hero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull us-hero sp-parallax">

<!-- wp:group {"className":"us-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group us-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"us-slide"} -->
<figure class="wp-block-image size-full us-slide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1.webp' ) ); ?>" alt="<?php echo esc_attr( umi_swim_t( 'a7e395276' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"us-slide"} -->
<figure class="wp-block-image size-full us-slide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2.webp' ) ); ?>" alt="<?php echo esc_attr( umi_swim_t( 'a43a530e6' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"us-slide"} -->
<figure class="wp-block-image size-full us-slide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3.webp' ) ); ?>" alt="<?php echo esc_attr( umi_swim_t( 'a7df045fb' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"us-hero__water sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group us-hero__water sp-parallax__layer"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"us-hero__title","layout":{"type":"default"}} -->
<div class="wp-block-group us-hero__title"><!-- wp:paragraph {"className":"us-hero__over"} -->
<p class="us-hero__over"><?php echo wp_kses_post( umi_swim_t( 'k82773249' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"us-hero__mark"} -->
<h1 class="wp-block-heading us-hero__mark"><?php echo wp_kses_post( umi_swim_t( 'k7972c6a4' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"us-lead","layout":{"type":"default"}} -->
<div class="wp-block-group us-lead"><!-- wp:paragraph {"className":"us-lead__l"} -->
<p class="us-lead__l"><?php echo wp_kses_post( umi_swim_t( 'k4d1797f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-lead__l"} -->
<p class="us-lead__l"><?php echo wp_kses_post( umi_swim_t( 'kd3ccfa49' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-lead__l"} -->
<p class="us-lead__l"><?php echo wp_kses_post( umi_swim_t( 'k8dd89fcb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"us-bar","layout":{"type":"default"}} -->
<div class="wp-block-group us-bar"><!-- wp:paragraph {"className":"us-bar__cell"} -->
<p class="us-bar__cell"><span class="us-bar__k"><?php echo wp_kses_post( umi_swim_t( 'k6c499175' ) ); ?></span><?php echo wp_kses_post( umi_swim_t( 'k95a871e3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-bar__cell"} -->
<p class="us-bar__cell"><span class="us-bar__k"><?php echo wp_kses_post( umi_swim_t( 'k703640ae' ) ); ?></span><?php echo wp_kses_post( umi_swim_t( 'k4e3a204c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-bar__cell"} -->
<p class="us-bar__cell"><span class="us-bar__k"><?php echo wp_kses_post( umi_swim_t( 'k14165447' ) ); ?></span><?php echo wp_kses_post( umi_swim_t( 'kf0b33c71' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"us-bar__cta"} -->
<p class="us-bar__cta"><a href="/first-lesson/"><?php echo wp_kses_post( umi_swim_t( 'ke3020a4a' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
