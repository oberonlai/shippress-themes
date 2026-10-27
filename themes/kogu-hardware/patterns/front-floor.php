<?php
/**
 * Title: Home: shop floor band
 * Slug: kogu-hardware/front-floor
 * Categories: kogu-hardware
 * Inserter: yes
 * Viewport Width: 1440
 * Description: A full-bleed parallax photograph of the shop floor with a counting number at the bottom left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-shop-floor.webp' ) ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":true,"align":"full","className":"kh-floor sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kh-floor sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( 'Aisle of tall wooden drawer cabinets and a rolling ladder in empty hardware store.' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-shop-floor.webp' ) ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"kh-floor__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-floor__in">
<!-- wp:heading {"className":"kh-floor__t"} -->
<h2 class="wp-block-heading kh-floor__t"><span class="sp-count">1,248</span> <?php echo wp_kses_post( kogu_hardware_t( 'k95db2156' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-floor__p"} -->
<p class="kh-floor__p"><?php echo wp_kses_post( kogu_hardware_t( 'k2a668f20' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
