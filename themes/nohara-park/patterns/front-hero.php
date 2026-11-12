<?php
/**
 * Title: Home: split hero with warden walk
 * Slug: nohara-park/front-hero
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Photograph left (62%, parallax) with the 01 / 03 counter and cue line; serif headline, lead and the booking pill right.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-hero"><!-- wp:group {"className":"np-hero__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-hero__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-hero__img"} -->
<figure class="wp-block-image size-full np-hero__img"><img src="<?php echo nohara_park_img( 'h1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_H1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-hero__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-hero__txt"><!-- wp:paragraph {"className":"np-sub"} -->
<p class="np-sub"><?php echo esc_html( nohara_park_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h1","level":1} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'hero_dates' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-hero__count","layout":{"type":"default"}} -->
<div class="wp-block-group np-hero__count"><!-- wp:html -->
<span class="np-cue" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-hero__n"} -->
<p class="np-hero__n"><?php echo esc_html( nohara_park_t( 'hero_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-hero__l"} -->
<p class="np-hero__l"><?php echo esc_html( nohara_park_t( 'hero_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
