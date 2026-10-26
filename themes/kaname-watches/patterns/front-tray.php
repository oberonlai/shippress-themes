<?php
/**
 * Title: Home: on the tray (parallax)
 * Slug: kaname-watches/front-tray
 * Categories: kaname-watches
 * Keywords: watch, shop, parallax
 * Viewport Width: 1440
 * Description: Full-width framed photograph of three watches on the felt tray; the photograph moves slower than the page (sp-parallax) under a fixed caption bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-tray-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-tray-sec"><!-- wp:group {"align":"wide","className":"kw-tray sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-tray sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-tray__img"} -->
<figure class="wp-block-image size-full kw-tray__img"><img src="<?php echo kaname_watches_img( 'k9-three-on-tray.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a0e6d3200' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kw-bar-cap kw-bar-cap--band","layout":{"type":"default"}} -->
<div class="wp-block-group kw-bar-cap kw-bar-cap--band"><!-- wp:heading {"level":2,"className":"kw-bar-cap__name"} -->
<h2 class="wp-block-heading kw-bar-cap__name"><?php echo wp_kses_post( kaname_watches_t( 'kbd7dbeda' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kw-bar-cap__line"} -->
<p class="kw-bar-cap__line"><?php echo wp_kses_post( kaname_watches_t( 'k3354ad56' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
