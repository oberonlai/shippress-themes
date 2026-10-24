<?php
/**
 * Title: Home: first screen
 * Slug: seiwa-furniture/front-kv
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: White top half with the headline; a wide photograph straddling the fold and a tall portrait with an elliptical corner bleeding off the right edge, over flat pale panels, with two line drawings on the photo corners.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-kv","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-kv"><!-- wp:group {"className":"sw-kv__shape sw-kv__shape--trap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-kv__shape sw-kv__shape--trap"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-kv__shape sw-kv__shape--pill","layout":{"type":"default"}} -->
<div class="wp-block-group sw-kv__shape sw-kv__shape--pill"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-kv__shape sw-kv__shape--block","layout":{"type":"default"}} -->
<div class="wp-block-group sw-kv__shape sw-kv__shape--block"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-kv__text","layout":{"type":"default"}} -->
<div class="wp-block-group sw-kv__text"><!-- wp:heading {"level":1,"className":"sw-kv__h"} -->
<h1 class="wp-block-heading sw-kv__h"><?php echo esc_html( seiwa_furniture_t( 'kv_h1a' ) ); ?><br><?php echo esc_html( seiwa_furniture_t( 'kv_h1b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sw-kv__sub"} -->
<p class="sw-kv__sub"><?php echo esc_html( seiwa_furniture_t( 'kv_sub' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sp-parallax sw-kv__wide","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax sw-kv__wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kv-chair-line.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P1' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sp-parallax sw-kv__tall","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax sw-kv__tall"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kv-swatch-hand.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P2' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-kv__shape sw-kv__shape--glass","layout":{"type":"default"}} -->
<div class="wp-block-group sw-kv__shape sw-kv__shape--glass"></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-kv__ln sw-kv__ln1"} -->
<figure class="wp-block-image size-full sw-kv__ln sw-kv__ln1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-swatch-tape.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-kv__ln sw-kv__ln2"} -->
<figure class="wp-block-image size-full sw-kv__ln sw-kv__ln2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-chair-elevation.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

</section>
<!-- /wp:group -->
