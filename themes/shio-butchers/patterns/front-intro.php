<?php
/**
 * Title: Home: intro
 * Slug: shio-butchers/front-intro
 * Categories: shio-butchers
 * Keywords: butcher, shop, home
 * Viewport Width: 1440
 * Description: Centred title, a 4:5 photograph and three narrative paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","className":"sb-intro","layout":{"type":"constrained"},"align":"full","anchor":"shop"} -->
<section id="shop" class="wp-block-group alignfull sb-intro"><!-- wp:group {"className":"sb-title","layout":{"type":"default"}} -->
<div class="wp-block-group sb-title"><!-- wp:paragraph {"className":"sb-sub"} -->
<p class="sb-sub"><?php echo wp_kses_post( shio_butchers_t( 'k7e0e6171' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( shio_butchers_t( 'kfe87e1b5' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-two","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide sb-two"><!-- wp:group {"className":"sb-intro__img","layout":{"type":"default"}} -->
<div class="wp-block-group sb-intro__img"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sb-photo"} -->
<figure class="wp-block-image size-full sb-photo"><img src="<?php echo shio_butchers_img( 'h10-apprentice.webp' ); ?>" alt="<?php echo esc_attr( shio_butchers_t( 'a22f523e5' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-intro__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sb-intro__text sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'k62923353' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'k63f6dca2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'k15862eb5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-textlink"} -->
<p class="sb-textlink"><a href="/about/"><?php echo wp_kses_post( shio_butchers_t( 'k31ff6a6e' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
