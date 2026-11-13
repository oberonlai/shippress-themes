<?php
/**
 * Title: Home: the dock (parallax band)
 * Slug: koori-coldstore/front-dock
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: Full-bleed night dock photograph with a slow parallax drift, a giant lowercase word, an underlined link and a circle arrow.
 */
?>
<!-- wp:cover {"url":"<?php echo koori_coldstore_img( 'dock-night.webp' ); ?>","dimRatio":0,"className":"kc-dockband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover kc-dockband sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_d01' ) ); ?>" src="<?php echo koori_coldstore_img( 'dock-night.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kc-dockband__box","layout":{"type":"default"}} -->
<div class="wp-block-group kc-dockband__box"><!-- wp:heading {"className":"kc-giant kc-giant--white"} -->
<h2 class="wp-block-heading kc-giant kc-giant--white"><?php echo esc_html( koori_coldstore_t( 'dock_a' ) ); ?><br><?php echo esc_html( koori_coldstore_t( 'dock_b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-linkrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-linkrow"><!-- wp:paragraph {"className":"kc-ulink"} -->
<p class="kc-ulink"><a href="#booking"><?php echo esc_html( koori_coldstore_t( 'dock_link' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="kc-circle" href="#booking" aria-label="<?php echo esc_attr( koori_coldstore_t( 'dock_link' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
