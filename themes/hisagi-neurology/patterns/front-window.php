<?php
/**
 * Title: Home: the stadium window
 * Slug: hisagi-neurology/front-window
 * Categories: hisagi-neurology
 * Viewport Width: 1440
 * Description: Stadium-shaped window with the consultation photograph, the headline and the row of response capsules.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hn-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-hero"><!-- wp:group {"className":"hn-window","layout":{"type":"default"}} -->
<div class="wp-block-group hn-window"><!-- wp:group {"className":"hn-window__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hn-window__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":864,"height":1080} -->
<figure class="wp-block-image size-full"><img src="<?php echo hisagi_neurology_img( 'hero-desk.webp' ); ?>" alt="<?php echo esc_attr( hisagi_neurology_t( 'a0e764632' ) ); ?>" width="864" height="1080"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-window__text","layout":{"type":"default"}} -->
<div class="wp-block-group hn-window__text"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'kb8bc922f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hn-h1"} -->
<h1 class="wp-block-heading hn-h1"><?php echo wp_kses_post( hisagi_neurology_t( 'k8007ee08' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-leadp"} -->
<p class="hn-leadp"><?php echo wp_kses_post( hisagi_neurology_t( 'k8881e6dd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-textlink"} -->
<p class="hn-textlink"><a href="/examination/"><?php echo wp_kses_post( hisagi_neurology_t( 'k9ce5ac4d' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hn-signal hn-signal--hero" aria-hidden="true"><span style="--i:0"></span><span style="--i:1"></span><span style="--i:2"></span><span style="--i:3"></span><span style="--i:4"></span><span style="--i:5"></span><span style="--i:6"></span><span style="--i:7"></span><span style="--i:8"></span><span style="--i:9"></span><span style="--i:10"></span><span style="--i:11"></span><span style="--i:12"></span><span style="--i:13"></span><span style="--i:14"></span><span style="--i:15"></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
