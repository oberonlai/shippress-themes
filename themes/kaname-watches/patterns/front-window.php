<?php
/**
 * Title: Home: window
 * Slug: kaname-watches/front-window
 * Categories: kaname-watches
 * Keywords: watch, shop, hero
 * Viewport Width: 1440
 * Description: Framed two-pane window (the watch | the wrist) that crossfades between two pairs, with a translucent taupe caption bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-hero"><!-- wp:group {"align":"wide","className":"kw-win","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-win"><!-- wp:group {"className":"kw-win__pane kw-win__pane--l","layout":{"type":"default"}} -->
<div class="wp-block-group kw-win__pane kw-win__pane--l"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-win__a"} -->
<figure class="wp-block-image size-full kw-win__a"><img src="<?php echo kaname_watches_img( 'k1-square-on-felt.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'ad27db555' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image size-full kw-win__b" aria-hidden="true"><img src="<?php echo kaname_watches_img( 'k3-slate-and-loupe.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'ad12fbb31' ) ); ?>"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-win__pane kw-win__pane--r","layout":{"type":"default"}} -->
<div class="wp-block-group kw-win__pane kw-win__pane--r"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-win__a"} -->
<figure class="wp-block-image size-full kw-win__a"><img src="<?php echo kaname_watches_img( 'k2-wrist-on-tray.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'a2ef26507' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image size-full kw-win__b" aria-hidden="true"><img src="<?php echo kaname_watches_img( 'k4-buckle.webp' ); ?>" alt="<?php echo esc_attr( kaname_watches_t( 'af15d7fe1' ) ); ?>"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-bar-cap kw-win__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kw-bar-cap kw-win__bar"><!-- wp:heading {"level":1,"className":"kw-bar-cap__name"} -->
<h1 class="wp-block-heading kw-bar-cap__name"><?php echo wp_kses_post( kaname_watches_t( 'k12cc3abb' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kw-bar-cap__line"} -->
<p class="kw-bar-cap__line"><?php echo wp_kses_post( kaname_watches_t( 'k6c19c402' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
