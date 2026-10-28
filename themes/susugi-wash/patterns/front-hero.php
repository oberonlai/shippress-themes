<?php
/**
 * Title: Home: 50/50 split hero (photo left, white panel right)
 * Slug: susugi-wash/front-hero
 * Categories: susugi-wash
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Left half: a cook slides a rack into the undercounter machine. Right half: two-line tagline, wordmark, two machines side by side, info bar.
 */
?>
<!-- wp:group {"anchor":"top","align":"full","className":"sw-hero","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group alignfull sw-hero">
<!-- wp:group {"className":"sw-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sw-hero__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-hero__img"} -->
<figure class="wp-block-image size-full sw-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-rack-in.webp' ) ); ?>" alt="<?php echo esc_attr( susugi_wash_t( 'aec32d709' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sw-hero__panel">
<!-- wp:paragraph {"className":"sw-side"} -->
<p class="sw-side"><?php echo wp_kses_post( susugi_wash_t( 'kb3767300' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-hero__main","layout":{"type":"default"}} -->
<div class="wp-block-group sw-hero__main">
<!-- wp:paragraph {"className":"sw-tag"} -->
<p class="sw-tag"><?php echo wp_kses_post( susugi_wash_t( 'k5fe4db10' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sw-word"} -->
<h1 class="wp-block-heading sw-word"><?php echo wp_kses_post( susugi_wash_t( 'keda6e71c' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"sw-pair","layout":{"type":"default"}} -->
<div class="wp-block-group sw-pair">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-pair__i"} -->
<figure class="wp-block-image size-full sw-pair__i"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1-machine-45.webp' ) ); ?>" alt="<?php echo esc_attr( susugi_wash_t( 'a2d797dbc' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( susugi_wash_t( 'kb1e66745' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-pair__i"} -->
<figure class="wp-block-image size-full sw-pair__i"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2-machine-60.webp' ) ); ?>" alt="<?php echo esc_attr( susugi_wash_t( 'a0560795e' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( susugi_wash_t( 'k858e4c47' ) ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-info","layout":{"type":"default"}} -->
<div class="wp-block-group sw-info">
<!-- wp:paragraph {"className":"sw-info__i"} -->
<p class="sw-info__i"><span class="sw-dot" aria-hidden="true"></span><?php echo wp_kses_post( susugi_wash_t( 'kf6ebdc52' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-info__i"} -->
<p class="sw-info__i"><?php echo wp_kses_post( susugi_wash_t( 'k8b07278a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-info__i"} -->
<p class="sw-info__i"><?php echo wp_kses_post( susugi_wash_t( 'k51143f43' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-info__i"} -->
<p class="sw-info__i"><?php echo wp_kses_post( susugi_wash_t( 'k3fe4fc96' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
