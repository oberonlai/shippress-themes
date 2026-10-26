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
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/cafe-dawn-wide.webp' ) ); ?>","dimRatio":0,"minHeight":72,"minHeightUnit":"vh","isDark":true,"align":"full","className":"fl-stage__cover sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull is-light fl-stage__cover sp-parallax" style="--sp-par:10%;padding-top:0;padding-bottom:0;min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Empty quiet café interior at dawn with chairs stacked and warm light across tables." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cafe-dawn-wide.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"className":"fl-stage__cap"} -->
<p class="fl-stage__cap">The Corner Room, Da'an, 7:10 a.m.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
