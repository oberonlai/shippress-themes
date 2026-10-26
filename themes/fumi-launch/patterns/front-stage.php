<?php
/**
 * Title: Home: stage band
 * Slug: fumi-launch/front-stage
 * Categories: fumi-launch
 * Viewport Width: 1440
 * Description: Full-bleed dark photograph with a parallax background and a caption.
 */
?>
<!-- wp:group {"className":"fl-stage","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fl-stage">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/cafe-dawn-wide.webp' ) ); ?>","dimRatio":25,"minHeight":72,"minHeightUnit":"vh","isDark":false,"align":"full","className":"fl-stage__cover sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light fl-stage__cover sp-parallax" style="padding-top:0;padding-bottom:0;min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-25 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( fumi_launch_t( 'a9f08ff47' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cafe-dawn-wide.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"className":"fl-stage__cap"} -->
<p class="fl-stage__cap"><?php echo wp_kses_post( fumi_launch_t( 'k104811ad' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
