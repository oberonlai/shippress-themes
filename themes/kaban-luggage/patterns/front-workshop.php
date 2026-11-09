<?php
/**
 * Title: Home: workshop
 * Slug: kaban-luggage/front-workshop
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Description: The back-room photograph and the workshop price list on a deep paper ground.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-workshop kl-paper-deep","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-workshop kl-paper-deep"><!-- wp:group {"className":"kl-workshop__photo sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group kl-workshop__photo sp-reveal sp-reveal--mask"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-workshop__img"} -->
<figure class="wp-block-image size-full kl-workshop__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/w1.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a209fc9f8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-workshop__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kl-workshop__cols"><!-- wp:group {"className":"kl-workshop__intro","layout":{"type":"default"}} -->
<div class="wp-block-group kl-workshop__intro"><!-- wp:heading {"level":2,"className":"kl-workshop__head"} -->
<h2 class="wp-block-heading kl-workshop__head"><?php echo wp_kses_post( kaban_luggage_t( 'k34cb6125' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-workshop__p"} -->
<p class="kl-workshop__p"><?php echo wp_kses_post( kaban_luggage_t( 'kc0f3c35a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-more"} -->
<p class="kl-more"><a href="/workshop/"><?php echo wp_kses_post( kaban_luggage_t( 'kf5cc2675' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"kl-prices"} -->
<figure class="wp-block-table kl-prices"><table><tbody><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'ke875d7b6' ) ); ?></td><td><?php echo wp_kses_post( kaban_luggage_t( 'kb24ce0cd' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'k2bc9834d' ) ); ?></td><td>€38</td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'ke2f4ab88' ) ); ?></td><td>€64</td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'k5204aee0' ) ); ?></td><td>€34</td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'k0d4da5f6' ) ); ?></td><td>€24</td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'k7332d520' ) ); ?></td><td>€29</td></tr><tr><td><?php echo wp_kses_post( kaban_luggage_t( 'k2dfab116' ) ); ?></td><td>€45</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
