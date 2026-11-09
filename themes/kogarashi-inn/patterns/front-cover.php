<?php
/**
 * Title: Home: cover
 * Slug: kogarashi-inn/front-cover
 * Categories: kogarashi-inn
 * Viewport Width: 1440
 * Description: First screen in two halves: mist ground with the title and three status fields, a full-bleed breakfast photograph below, and an analogue house clock on the seam.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ki-cover"} -->
<section class="wp-block-group alignfull ki-cover"><!-- wp:group {"align":"full","className":"ki-cover__top ki-mist"} -->
<div class="wp-block-group alignfull ki-cover__top ki-mist"><!-- wp:group {"className":"ki-cover__inner","layout":{"type":"default"}} -->
<div class="wp-block-group ki-cover__inner"><!-- wp:group {"className":"ki-cover__copy"} -->
<div class="wp-block-group ki-cover__copy"><!-- wp:heading {"level":1,"className":"ki-h1"} -->
<h1 class="wp-block-heading ki-h1"><?php echo wp_kses_post( kogarashi_inn_t( 'k6c18ff09' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ki-tagline"} -->
<p class="ki-tagline"><?php echo wp_kses_post( kogarashi_inn_t( 'kfa2397a4' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-fields"} -->
<div class="wp-block-group ki-fields"><!-- wp:paragraph {"className":"ki-field"} -->
<p class="ki-field"><span class="ki-num">(01)</span> <?php echo wp_kses_post( kogarashi_inn_t( 'k9d646fc8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-field"} -->
<p class="ki-field"><span class="ki-num">(02)</span> <?php echo wp_kses_post( kogarashi_inn_t( 'kf0abcf6f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ki-field"} -->
<p class="ki-field"><span class="ki-num">(03)</span> <?php echo wp_kses_post( kogarashi_inn_t( 'k2ee7335f' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"ki-cover__bottom"} -->
<div class="wp-block-group alignfull ki-cover__bottom"><!-- wp:group {"className":"ki-clock ki-clock--seam"} -->
<div class="wp-block-group ki-clock ki-clock--seam"><!-- wp:html -->
<div class="ki-clock__face"><i class="ki-tick ki-tick--q" style="--a:0deg"></i><i class="ki-tick" style="--a:30deg"></i><i class="ki-tick" style="--a:60deg"></i><i class="ki-tick ki-tick--q" style="--a:90deg"></i><i class="ki-tick" style="--a:120deg"></i><i class="ki-tick" style="--a:150deg"></i><i class="ki-tick ki-tick--q" style="--a:180deg"></i><i class="ki-tick" style="--a:210deg"></i><i class="ki-tick" style="--a:240deg"></i><i class="ki-tick ki-tick--q" style="--a:270deg"></i><i class="ki-tick" style="--a:300deg"></i><i class="ki-tick" style="--a:330deg"></i><i class="ki-hand ki-hand--h" style="--r:200deg"></i><i class="ki-hand ki-hand--m" style="--r:240deg"></i><i class="ki-dot"></i></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ki-clock__label"} -->
<p class="ki-clock__label"><?php echo wp_kses_post( kogarashi_inn_t( 'ke61b124f' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-hero-photo sp-parallax"} -->
<div class="wp-block-group ki-hero-photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ki-hero-photo__img"} -->
<figure class="wp-block-image size-full ki-hero-photo__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( kogarashi_inn_t( 'a446e42bd' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
