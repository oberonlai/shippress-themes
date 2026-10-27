<?php
/**
 * Title: Home: production floor
 * Slug: komugi-school/front-floor
 * Categories: komugi-school
 * Inserter: yes
 * Viewport Width: 1440
 * Description: A full-bleed production floor photograph with a slow parallax and a white caption card.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-floor.webp' ) ); ?>","dimRatio":0,"minHeight":420,"minHeightUnit":"px","contentPosition":"bottom left","alt":"Bakers working in a dawn bakery floor with proofing racks and lit deck ovens.","className":"sp-parallax ks-floor","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left sp-parallax ks-floor" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( komugi_school_t( 'a37d22650' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-floor.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ks-floor__card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-floor__card"><!-- wp:heading {"className":"ks-floor__title"} -->
<h2 class="wp-block-heading ks-floor__title"><?php echo wp_kses_post( komugi_school_t( 'k41d6eea9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( komugi_school_t( 'k616eb0fc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
