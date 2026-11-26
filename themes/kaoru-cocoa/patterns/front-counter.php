<?php
/**
 * Title: Home: outline card wall
 * Slug: kaoru-cocoa/front-counter
 * Categories: kaoru-cocoa
 * Keywords: cards, menu, prices, wall
 * Viewport Width: 1440
 * Description: The counter menu as a staggered three-column wall of one-pixel outline cards, each with a tag line above, a ruled price row and an inset photo.
 */
?>
<!-- wp:group {"align":"full","anchor":"counter","className":"kc-counter","layout":{"type":"default"}} -->
<div id="counter" class="wp-block-group alignfull kc-counter"><!-- wp:group {"className":"kc-counter__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-counter__head"><!-- wp:heading {"level":2,"className":"kc-word"} -->
<h2 class="wp-block-heading kc-word"><?php echo wp_kses_post( kaoru_cocoa_t( 'k64d12922' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-counter__intro","layout":{"type":"default"}} -->
<div class="wp-block-group kc-counter__intro"><!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'kebd0cfdb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-link"} -->
<p class="kc-link"><a href="/prices/"><?php echo wp_kses_post( kaoru_cocoa_t( 'k77979d18' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall sp-stagger"><!-- wp:group {"className":"kc-wall__col kc-wall__col--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'k048a56e0' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k71b5ee5a' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'kfbcc8eb5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'keb3db29d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k88243a5b' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'k8ba9d9a2' ) ); ?></b></span> <span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k3cebe106' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'k6bad4093' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cocoa.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'adb873d51' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'k394fb74e' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k226bea4d' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k23dba37d' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'k5ec3b91c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b><?php echo wp_kses_post( kaoru_cocoa_t( 'k3f082438' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-bar.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a36f6bcb0' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall__col kc-wall__col--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'k048a56e0' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'kb6dc0555' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k79abde36' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'kc841cfc5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b><?php echo wp_kses_post( kaoru_cocoa_t( 'ke62aaed6' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-flight.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a76798f7e' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'k394fb74e' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k5a934f94' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k6eef0627' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'kfc88333f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b><?php echo wp_kses_post( kaoru_cocoa_t( 'k883d367e' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-bonbons.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a3291d258' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall__col kc-wall__col--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--3 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'k048a56e0' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k41a7f939' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'ke2f99495' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'kc187880b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k88243a5b' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'k82bc35a9' ) ); ?></b></span> <span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k3cebe106' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'kf24c67fb' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-slice.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a4eaef5f9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip"><?php echo wp_kses_post( kaoru_cocoa_t( 'ka240fa27' ) ); ?></span><em><?php echo wp_kses_post( kaoru_cocoa_t( 'kd8b67a91' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'k6f91ffd6' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub"><?php echo wp_kses_post( kaoru_cocoa_t( 'k53a67943' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k590b2adc' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'kb6577a0d' ) ); ?></b></span> <span class="kc-price__item"><span class="kc-price__lab"><?php echo wp_kses_post( kaoru_cocoa_t( 'k0976a067' ) ); ?></span> <b><?php echo wp_kses_post( kaoru_cocoa_t( 'k824f17f1' ) ); ?></b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cake.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a542399a6' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
