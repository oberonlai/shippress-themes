<?php
/**
 * Title: Home: ride band
 * Slug: hayate-cycles/front-ride-band
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with one stone card that pokes out below it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-band">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/s9-gravel.webp' ) ); ?>","dimRatio":20,"overlayColor":"ink","minHeight":720,"minHeightUnit":"px","isUserOverlayColor":true,"align":"full","className":"hc-band__photo sp-parallax"} -->
<div class="wp-block-cover alignfull hc-band__photo sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s9' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s9-gravel.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"hc-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group hc-band__card">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'ride_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'ride_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-band__p"} -->
<p class="hc-band__p"><?php echo esc_html( hayate_cycles_t( 'ride_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/rides/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
