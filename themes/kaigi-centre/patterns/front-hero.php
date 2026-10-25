<?php
/**
 * Title: Home: hero
 * Slug: kaigi-centre/front-hero
 * Categories: kaigi-centre
 * Keywords: conference, front-hero
 * Viewport Width: 1440
 * Description: Framed hall photograph (pen contour wipes to photo) with a diagonal edge, notched logo tab, notice pill and the plum room panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero">
<!-- wp:group {"className":"kc-hero__stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stagewrap">
<!-- wp:group {"className":"kc-hero__stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stage sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__contour"} -->
<figure class="wp-block-image size-full kc-hero__contour"><img src="<?php echo kaigi_centre_img( 'hall-contour.webp' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_contour' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kc-hero__wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__wipe">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__photo sp-parallax__layer"} -->
<figure class="wp-block-image size-full kc-hero__photo sp-parallax__layer"><img src="<?php echo kaigi_centre_img( 'hero-hall.webp' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pill">
<!-- wp:paragraph {"className":"kc-pill__text"} -->
<p class="kc-pill__text"><svg class="kc-pill__icon" viewBox="0 0 16 16" width="14" height="14" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6.5" fill="none" stroke="currentColor" stroke-width="1.2"/><path d="M8 7v4M8 4.8v.1" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg><?php echo esc_html( kaigi_centre_t( 'pill' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel">
<!-- wp:paragraph {"className":"kc-label kc-label--light"} -->
<p class="kc-label kc-label--light"><?php echo esc_html( kaigi_centre_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-hero__title"} -->
<h1 class="wp-block-heading kc-hero__title"><?php echo esc_html( kaigi_centre_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"kc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rows">
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/meridian-hall/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r0_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r0_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/linden-room/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r1_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r1_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r2_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r2_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r3_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r3_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r4_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r4_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-hero__link"} -->
<p class="kc-hero__link"><a href="<?php echo esc_url( home_url( '/plan-an-event/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
