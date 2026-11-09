<?php
/**
 * Title: Home: intro band
 * Slug: kogarashi-inn/front-intro
 * Categories: kogarashi-inn
 * Viewport Width: 1440
 * Description: Dark parallax band with a portrait, a heading and six one-sentence lines, and a small photograph at the right edge that overhangs the band.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ki-intro"} -->
<section class="wp-block-group alignfull ki-intro"><!-- wp:group {"className":"ki-intro__bg sp-parallax"} -->
<div class="wp-block-group ki-intro__bg sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ki-intro__img"} -->
<figure class="wp-block-image size-full ki-intro__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( kogarashi_inn_t( 'a82988aaf' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-intro__inner","layout":{"type":"default"}} -->
<div class="wp-block-group ki-intro__inner"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ki-intro__portrait sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ki-intro__portrait sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="<?php echo esc_attr( kogarashi_inn_t( 'a31acecc4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ki-intro__text sp-reveal sp-reveal--up"} -->
<div class="wp-block-group ki-intro__text sp-reveal sp-reveal--up"><!-- wp:group {"className":"ki-sechead ki-sechead--dark","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group ki-sechead ki-sechead--dark"><!-- wp:paragraph {"className":"ki-vlabel"} -->
<p class="ki-vlabel"><?php echo wp_kses_post( kogarashi_inn_t( 'kaebfe467' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ki-h2"} -->
<h2 class="wp-block-heading ki-h2"><?php echo wp_kses_post( kogarashi_inn_t( 'k516443d4' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-lines ki-lines--dark"} -->
<div class="wp-block-group ki-lines ki-lines--dark"><!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'k4d325966' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'k6e2efada' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'k219e2462' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'k69277f7b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'k4bf64b25' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-line"} -->
<p class="ki-line"><?php echo wp_kses_post( kogarashi_inn_t( 'kb416cc03' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ki-intro__edge sp-reveal sp-reveal--left"} -->
<figure class="wp-block-image size-full ki-intro__edge sp-reveal sp-reveal--left"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04.webp' ) ); ?>" alt="<?php echo esc_attr( kogarashi_inn_t( 'a531978f1' ) ); ?>"/></figure>
<!-- /wp:image -->

</section>
<!-- /wp:group -->
