<?php
/**
 * Title: Home: torn-frame hero
 * Slug: madoka-childcare/front-hero
 * Categories: madoka-childcare
 * Description: Header-height torn photo frame with the headline on the pale right, a dotted link and the round badge on small screens.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-hero"><!-- wp:group {"className":"mc-hero__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mc-hero__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-hero__img"} -->
<figure class="wp-block-image size-full mc-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group mc-hero__text"><!-- wp:heading {"level":1,"className":"mc-hero__h"} -->
<h1 class="wp-block-heading mc-hero__h"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'hero_h' ) ) ), array( 'br' => array() ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mc-lead"} -->
<p class="mc-lead"><?php echo esc_html( madoka_childcare_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/the-care-day/"><?php echo esc_html( madoka_childcare_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-badge mc-badge--inline"} -->
<p class="mc-badge mc-badge--inline"><a href="/visit/"><span class="mc-badge__t"><?php echo wp_kses( madoka_childcare_t( 'book' ), array( 'br' => array() ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
