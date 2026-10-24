<?php
/**
 * Title: Home: welcome
 * Slug: madoka-childcare/front-welcome
 * Categories: madoka-childcare
 * Description: Stripe heading, three short paragraphs and two offset photographs over flat blobs.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-sec mc-sec--l mc-welcome","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-sec--l mc-welcome"><!-- wp:group {"className":"mc-wrap mc-welcome__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap mc-welcome__grid"><!-- wp:group {"className":"mc-welcome__t","layout":{"type":"default"}} -->
<div class="wp-block-group mc-welcome__t"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'wel_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'wel_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'wel_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'wel_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/about/"><?php echo esc_html( madoka_childcare_t( 'wel_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-welcome__p sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mc-welcome__p sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-welcome__b sp-reveal sp-reveal--zoom mc-pop"} -->
<figure class="wp-block-image size-full mc-welcome__b sp-reveal sp-reveal--zoom mc-pop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-welcome__a sp-reveal sp-reveal--zoom mc-pop"} -->
<figure class="wp-block-image size-full mc-welcome__a sp-reveal sp-reveal--zoom mc-pop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mc-blob mc-blob--band","layout":{"type":"default"}} -->
<div class="wp-block-group mc-blob mc-blob--band"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-blob mc-blob--walnut","layout":{"type":"default"}} -->
<div class="wp-block-group mc-blob mc-blob--walnut"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
