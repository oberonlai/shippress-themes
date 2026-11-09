<?php
/**
 * Title: Home: hero window
 * Slug: okami-college/front-hero
 * Categories: okami-college
 * Keywords: college, hotel, school
 * Viewport Width: 1440
 * Description: Inset photo window from the left, white tagline box on its top-left edge, teal-to-slate caption strip at the lower right, three crossfading slides and dashes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ok-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ok-hero"><!-- wp:group {"className":"ok-hero__win sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ok-hero__win sp-parallax"><!-- wp:group {"className":"ok-hero__slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ok-hero__slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ok-slide ok-slide--1"} -->
<figure class="wp-block-image size-full ok-slide ok-slide--1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-desk.webp' ) ); ?>" alt="<?php echo esc_attr( okami_college_t( 'a90f93a37' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ok-slide ok-slide--2"} -->
<figure class="wp-block-image size-full ok-slide ok-slide--2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-lobby.webp' ) ); ?>" alt="<?php echo esc_attr( okami_college_t( 'af7a503b5' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ok-slide ok-slide--3"} -->
<figure class="wp-block-image size-full ok-slide ok-slide--3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-banquet.webp' ) ); ?>" alt="<?php echo esc_attr( okami_college_t( 'a412c835c' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-hero__box","layout":{"type":"default"}} -->
<div class="wp-block-group ok-hero__box"><!-- wp:heading {"level":1,"className":"ok-hero__title"} -->
<h1 class="wp-block-heading ok-hero__title"><?php echo wp_kses_post( okami_college_t( 'kee50d00d' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-hero__strip","layout":{"type":"default"}} -->
<div class="wp-block-group ok-hero__strip"><!-- wp:paragraph {"className":"ok-hero__cap"} -->
<p class="ok-hero__cap"><?php echo wp_kses_post( okami_college_t( 'kd7d4d271' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-hero__dashes","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ok-hero__dashes"><!-- wp:group {"className":"ok-dash ok-dash--1","layout":{"type":"default"}} -->
<div class="wp-block-group ok-dash ok-dash--1"></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-dash ok-dash--2","layout":{"type":"default"}} -->
<div class="wp-block-group ok-dash ok-dash--2"></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-dash ok-dash--3","layout":{"type":"default"}} -->
<div class="wp-block-group ok-dash ok-dash--3"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
