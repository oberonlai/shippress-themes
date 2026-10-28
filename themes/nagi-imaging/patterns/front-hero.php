<?php
/**
 * Title: Home: hero
 * Slug: nagi-imaging/front-hero
 * Categories: nagi-imaging
 * Keywords: imaging, clinic, radiology
 * Viewport Width: 1440
 * Description: Scattered field of seven rounded low-key photographs drifting at different speeds, the headline on two white strips crossing the console photo, a light-grey bottom half with the lede and a ticker bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nagi-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-hero">
<!-- wp:group {"className":"nagi-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-hero__stage">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f1 sp-parallax nagi-par-6"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f1 sp-parallax nagi-par-6"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-console.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'ac24952c0' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f2 sp-parallax nagi-par-9"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f2 sp-parallax nagi-par-9"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-gantry.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'aed9743ca' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f3 sp-parallax nagi-par-7"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f3 sp-parallax nagi-par-7"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-monitor.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'a7ef1be3c' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f4 sp-parallax nagi-par-5"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f4 sp-parallax nagi-par-5"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h4-corridor.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'aea5ee177' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f5 sp-parallax nagi-par-8"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f5 sp-parallax nagi-par-8"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h5-keyboard.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'a6d662efc' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f6 sp-parallax nagi-par-4"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f6 sp-parallax nagi-par-4"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h6-report.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'ad026ae3c' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-f7 sp-parallax nagi-par-10"} -->
<figure class="wp-block-image size-large nagi-frame nagi-f7 sp-parallax nagi-par-10"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h7-chair.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'a22404c62' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"nagi-strips nagi-hero__title"} -->
<h1 class="wp-block-heading nagi-strips nagi-hero__title"><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'kb42a9b2d' ) ); ?></span><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'k78dd75f8' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"nagi-hero__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-hero__bottom">
<!-- wp:paragraph {"className":"nagi-lede"} -->
<p class="nagi-lede"><?php echo wp_kses_post( nagi_imaging_t( 'k47ad8c9c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nagi-links","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-links">
<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/referrers/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'kb1d08c8c' ) ); ?><span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'k64e89baf' ) ); ?><span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-ticker","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-ticker">
<!-- wp:paragraph {"className":"nagi-ticker__date"} -->
<p class="nagi-ticker__date">28.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__tag"} -->
<p class="nagi-ticker__tag"><span class="nagi-dot" aria-hidden="true"></span><?php echo wp_kses_post( nagi_imaging_t( 'k1dd1c5fb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__line"} -->
<p class="nagi-ticker__line"><a href="<?php echo esc_url( home_url( '/studies/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'k60e9253d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-ticker__arrows"} -->
<p class="nagi-ticker__arrows"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/news/' ) ); ?>" aria-label="<?php echo esc_attr( nagi_imaging_t( 'add1ba187' ) ); ?>">←</a><a class="nagi-circle" href="<?php echo esc_url( home_url( '/studies/' ) ); ?>" aria-label="Studies">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
