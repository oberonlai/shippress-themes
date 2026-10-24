<?php
/**
 * Title: Home: garden parallax band
 * Slug: madoka-childcare/front-garden
 * Categories: madoka-childcare
 * Description: Full-bleed parallax garden photograph with torn edges and a light card carrying one parent's words.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-garden mc-garden-torn sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-garden mc-garden-torn sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-garden__img"} -->
<figure class="wp-block-image size-full mc-garden__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mc-wrap mc-garden__in","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap mc-garden__in"><!-- wp:group {"className":"mc-garden__card","layout":{"type":"default"}} -->
<div class="wp-block-group mc-garden__card"><!-- wp:paragraph {"className":"mc-tab mc-tab--small"} -->
<p class="mc-tab mc-tab--small"><?php echo esc_html( madoka_childcare_t( 'gar_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-quote"} -->
<p class="mc-quote"><?php echo esc_html( madoka_childcare_t( 'gar_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-garden__name"} -->
<p class="mc-garden__name"><?php echo esc_html( madoka_childcare_t( 'gar_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/stories/"><?php echo esc_html( madoka_childcare_t( 'gar_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
