<?php
/**
 * Title: Home: what we watch
 * Slug: kagi-security/front-watch
 * Categories: kagi-security
 * Keywords: services, monitoring, watch
 * Viewport Width: 1440
 * Description: A tick-bar label beside a heading with one phrase in the accent colour, three paragraphs, then a photograph and four numbered things we watch.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-watch","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-watch"><!-- wp:group {"className":"ks-watch__head","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-watch__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_watch_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-watch__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__intro"><!-- wp:heading {"level":2,"className":"ks-watch__title"} -->
<h2 class="wp-block-heading ks-watch__title"><?php echo wp_kses_post( kagi_security_t( 'front_watch_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-watch__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-watch__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-watch__photo"} -->
<figure class="wp-block-image size-full ks-watch__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/server-room.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_watch_img' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-watch__list","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__list"><!-- wp:group {"className":"ks-watch__item","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__item"><!-- wp:paragraph {"className":"ks-watch__no"} -->
<p class="ks-watch__no"><?php echo wp_kses_post( kagi_security_t( 'front_watch_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_watch_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_d1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-watch__item","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__item"><!-- wp:paragraph {"className":"ks-watch__no"} -->
<p class="ks-watch__no"><?php echo wp_kses_post( kagi_security_t( 'front_watch_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_watch_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-watch__item","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__item"><!-- wp:paragraph {"className":"ks-watch__no"} -->
<p class="ks-watch__no"><?php echo wp_kses_post( kagi_security_t( 'front_watch_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_watch_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_d3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-watch__item","layout":{"type":"default"}} -->
<div class="wp-block-group ks-watch__item"><!-- wp:paragraph {"className":"ks-watch__no"} -->
<p class="ks-watch__no"><?php echo wp_kses_post( kagi_security_t( 'front_watch_n4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_watch_h4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_watch_d4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-watch__more"} -->
<div class="wp-block-buttons ks-watch__more"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/what-we-watch/"><?php echo wp_kses_post( kagi_security_t( 'front_watch_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
