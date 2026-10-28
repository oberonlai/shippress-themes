<?php
/**
 * Title: Home: about
 * Slug: kura-wine/front-about
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Scattered About: tall 2:3 photo left, small 3:2 photo right and lower, a narrow text column from column 8.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"kw-sec kw-about","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull kw-sec kw-about"><!-- wp:group {"className":"kw-wrap kw-about__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kw-wrap kw-about__grid"><!-- wp:group {"className":"kw-about__head","layout":{"type":"default"}} -->
<div class="wp-block-group kw-about__head"><!-- wp:paragraph {"className":"kw-label"} -->
<p class="kw-label"><?php echo esc_html( kura_wine_t( 'ab_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-catch"} -->
<p class="kw-catch"><?php echo esc_html( kura_wine_t( 'ab_catch' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-about__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kw-about__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'ab_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'ab_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kura_wine_t( 'ab_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo kura_wine_more( 'ab_more', '/about/', 'sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k4 kw-about__tall sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k4 kw-about__tall sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'K4' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k5 kw-about__small sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k5 kw-about__small sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'K5' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K5' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
