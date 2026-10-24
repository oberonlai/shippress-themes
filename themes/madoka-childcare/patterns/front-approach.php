<?php
/**
 * Title: Home: approach
 * Slug: madoka-childcare/front-approach
 * Categories: madoka-childcare
 * Description: One photograph at the left, stripe heading and two paragraphs at the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-sec mc-sec--s mc-approach","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-sec--s mc-approach"><!-- wp:group {"className":"mc-wrap mc-approach__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap mc-approach__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-approach__img"} -->
<figure class="wp-block-image size-full mc-approach__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mc-approach__t","layout":{"type":"default"}} -->
<div class="wp-block-group mc-approach__t"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'app_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'app_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'app_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/rooms/"><?php echo esc_html( madoka_childcare_t( 'app_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
