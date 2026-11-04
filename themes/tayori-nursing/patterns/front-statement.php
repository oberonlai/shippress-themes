<?php
/**
 * Title: Home: statement that fills from grey to ink
 * Slug: tayori-nursing/front-statement
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Two staggered three-line statements whose lines fill from grey to ink on scroll, a pebble photograph and a doodle.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-statement","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-statement"><!-- wp:group {"align":"wide","className":"tn-statement__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-statement__inner tn-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-statement__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-statement__photo sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-laugh.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'aa4808531' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'ke2a3a184' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tn-fill sp-stagger tn-fill--a","layout":{"type":"default"}} -->
<div class="wp-block-group tn-fill sp-stagger tn-fill--a"><!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up"} -->
<p class="tn-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( tayori_nursing_t( 'kf5535b70' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up"} -->
<p class="tn-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( tayori_nursing_t( 'ke8304092' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up"} -->
<p class="tn-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( tayori_nursing_t( 'k8682a4e8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-fill sp-stagger tn-fill--b","layout":{"type":"default"}} -->
<div class="wp-block-group tn-fill sp-stagger tn-fill--b"><!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up"} -->
<p class="tn-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( tayori_nursing_t( 'k69541435' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up"} -->
<p class="tn-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( tayori_nursing_t( 'k63c2a214' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-line sp-reveal sp-reveal--up tn-line--last"} -->
<p class="tn-line sp-reveal sp-reveal--up tn-line--last"><?php echo wp_kses_post( tayori_nursing_t( 'k6fd17d7a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-d3"} -->
<figure class="wp-block-image size-full tn-doodle tn-d3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d3-bicycle.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-hill" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 70C220 20 420 10 640 48S1000 118 1200 60S1380 20 1440 34V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->
