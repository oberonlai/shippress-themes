<?php
/**
 * Title: Home: treatment room band
 * Slug: ayumi-podiatry/front-room
 * Categories: ayumi-podiatry
 * Viewport Width: 1440
 * Description: Full-bleed treatment room photograph with parallax and a caption pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-room sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-room sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/a03.webp' ) ); ?>" alt="<?php echo esc_attr( ayumi_podiatry_t( 'afd56c7e3' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"ap-caption"} -->
<p class="ap-caption"><?php echo wp_kses_post( ayumi_podiatry_t( 'k6a16cdf1' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
