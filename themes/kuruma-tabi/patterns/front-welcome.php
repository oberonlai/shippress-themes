<?php
/**
 * Title: Home: welcome
 * Slug: kuruma-tabi/front-welcome
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Emblem heading, two paragraphs of narrative and a 3:2 photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec","layout":{"type":"default"},"anchor":"welcome"} -->
<section id="welcome" class="wp-block-group alignfull kt-sec"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'welcome_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'welcome_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-welcome","layout":{"type":"default"}} -->
<div class="wp-block-group kt-welcome"><!-- wp:group {"className":"kt-welcome__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-welcome__text"><!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'welcome_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'welcome_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-welcome__ph","layout":{"type":"default"}} -->
<div class="wp-block-group kt-welcome__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'driver-mirror-check.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
