<?php
/**
 * Title: Home: a training day (photo with overlapping caption)
 * Slug: kesho-college/front-wide
 * Categories: kesho-college
 * Keywords: hairdressing, beauty, college
 * Viewport Width: 1440
 * Description: Wide classroom photo with a parallax drift, an oversized caption overlapping its bottom edge and an accent link.
 */
?>
<!-- wp:group {"tagName":"section","className":"kc-wideband","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull kc-wideband"><!-- wp:group {"className":"kc-wide sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wide sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-wide__img"} -->
<figure class="wp-block-image size-full kc-wide__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k-05.webp' ) ); ?>" alt="<?php echo esc_attr( kesho_college_t( 'a8ac8dd0c' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-capwrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-capwrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-caption"} -->
<h2 class="wp-block-heading kc-caption"><?php echo wp_kses_post( kesho_college_t( 'k1aec1351' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-caption__text"} -->
<p class="kc-caption__text"><?php echo wp_kses_post( kesho_college_t( 'kbbd71fa4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-more"} -->
<p class="kc-more"><a href="/a-training-day/"><?php echo wp_kses_post( kesho_college_t( 'k52cf17c7' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
