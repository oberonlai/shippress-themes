<?php
/**
 * Title: Home: first screen
 * Slug: azukari-stays/front-hero
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Diagonal split: ink-blue panel, one lit bedroom photograph, thin headline across the cut, fact bar.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"az-hero"} -->
<section id="top" class="wp-block-group alignfull az-hero"><!-- wp:group {"className":"az-hero__stage"} -->
<div class="wp-block-group az-hero__stage"><!-- wp:group {"className":"az-hero__photo"} -->
<div class="wp-block-group az-hero__photo"><!-- wp:group {"className":"az-hero__par sp-parallax"} -->
<div class="wp-block-group az-hero__par sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-hero__img"} -->
<figure class="wp-block-image size-full az-hero__img"><img src="<?php echo esc_url( azukari_stays_img( 'p01-kv-bedroom.webp' ) ); ?>" alt="<?php echo esc_attr( azukari_stays_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-hero__text"} -->
<div class="wp-block-group az-hero__text"><!-- wp:heading {"level":1,"className":"az-hero__h1"} -->
<h1 class="wp-block-heading az-hero__h1"><?php echo azukari_stays_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-hero__sub"} -->
<p class="az-hero__sub"><?php echo esc_html( azukari_stays_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-bar"} -->
<div class="wp-block-group az-bar"><!-- wp:group {"className":"az-bar__facts"} -->
<div class="wp-block-group az-bar__facts"><!-- wp:group {"className":"az-fact"} -->
<div class="wp-block-group az-fact"><!-- wp:paragraph {"className":"az-fact__l"} -->
<p class="az-fact__l"><?php echo esc_html( azukari_stays_t( 'fact1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-fact__v"} -->
<p class="az-fact__v"><?php echo esc_html( azukari_stays_t( 'fact1_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-fact"} -->
<div class="wp-block-group az-fact"><!-- wp:paragraph {"className":"az-fact__l"} -->
<p class="az-fact__l"><?php echo esc_html( azukari_stays_t( 'fact2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-fact__v"} -->
<p class="az-fact__v"><?php echo esc_html( azukari_stays_t( 'fact2_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-fact"} -->
<div class="wp-block-group az-fact"><!-- wp:paragraph {"className":"az-fact__l"} -->
<p class="az-fact__l"><?php echo esc_html( azukari_stays_t( 'fact3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-fact__v"} -->
<p class="az-fact__v"><?php echo esc_html( azukari_stays_t( 'fact3_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-fact"} -->
<div class="wp-block-group az-fact"><!-- wp:paragraph {"className":"az-fact__l"} -->
<p class="az-fact__l"><?php echo esc_html( azukari_stays_t( 'fact4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-fact__v"} -->
<p class="az-fact__v"><?php echo esc_html( azukari_stays_t( 'fact4_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"az-bar__btn"} -->
<div class="wp-block-buttons az-bar__btn"><!-- wp:button {"className":"az-cta az-cta--bar"} -->
<div class="wp-block-button az-cta az-cta--bar"><a class="wp-block-button__link wp-element-button" href="/consultation/"><?php echo esc_html( azukari_stays_t( 'cta_main' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
