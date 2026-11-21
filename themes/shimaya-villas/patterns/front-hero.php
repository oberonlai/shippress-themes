<?php
/**
 * Title: Home: framed window with a solid headline panel and the hold-dates bar
 * Slug: shimaya-villas/front-hero
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: An inset photograph window with the headline on a solid panel at its top-left corner and a dark glass hold-dates bar docked on its foot.
 */
?>
<!-- wp:group {"align":"full","className":"sv-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sv-hero"><!-- wp:cover {"url":"<?php echo shimaya_villas_img( 'p01-doors-kv.webp' ); ?>","dimRatio":0,"alt":"Housekeeper opening timber glass doors to a sunny terrace with a plunge pool.","isDark":false,"className":"sv-window sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light sv-window sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shimaya_villas_t( 'a6feabf38' ) ); ?>" src="<?php echo shimaya_villas_img( 'p01-doors-kv.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --><!-- wp:group {"className":"sv-panel","layout":{"type":"default"}} -->
<div class="wp-block-group sv-panel"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'kec76b4f4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"sv-h1"} -->
<h1 class="wp-block-heading sv-h1"><?php echo wp_kses_post( shimaya_villas_t( 'kc67274f8' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"sv-sub"} -->
<p class="sv-sub"><?php echo wp_kses_post( shimaya_villas_t( 'kdfe99f92' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-holdbar","layout":{"type":"default"}} -->
<div class="wp-block-group sv-holdbar" aria-label="<?php echo esc_attr( shimaya_villas_t( 'a6dc0a500' ) ); ?>"><!-- wp:paragraph {"className":"sv-hb__cell"} -->
<p class="sv-hb__cell"><a href="#hold"><span class="sv-hb__l"><?php echo wp_kses_post( shimaya_villas_t( 'k5f0ca3e8' ) ); ?></span><span class="sv-hb__v"><?php echo wp_kses_post( shimaya_villas_t( 'k59da6cb5' ) ); ?></span></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-hb__cell"} -->
<p class="sv-hb__cell"><a href="#hold"><span class="sv-hb__l"><?php echo wp_kses_post( shimaya_villas_t( 'k4229e063' ) ); ?></span><span class="sv-hb__v"><?php echo wp_kses_post( shimaya_villas_t( 'k42c95792' ) ); ?></span></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-hb__cell"} -->
<p class="sv-hb__cell"><a href="#hold"><span class="sv-hb__l"><?php echo wp_kses_post( shimaya_villas_t( 'kaebfe467' ) ); ?></span><span class="sv-hb__v"><?php echo wp_kses_post( shimaya_villas_t( 'k7318bde8' ) ); ?></span></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-hb__tile"} -->
<p class="sv-hb__tile"><a href="#hold" aria-label="<?php echo esc_attr( shimaya_villas_t( 'a6dc0a500' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
