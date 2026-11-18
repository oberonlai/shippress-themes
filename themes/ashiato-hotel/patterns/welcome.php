<?php
/**
 * Title: Welcome: narrow intro, photo and figures
 * Slug: ashiato-hotel/welcome
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: A narrow three-paragraph introduction beside a rounded lobby photograph with four figures.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-welcome","anchor":"welcome","layout":{"type":"default"}} -->
<section id="welcome" class="wp-block-group ah-sec ah-welcome"><!-- wp:group {"className":"ah-welcome__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ah-welcome__grid"><!-- wp:group {"className":"ah-welcome__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-welcome__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 'welcome_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'welcome_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'welcome_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'welcome_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-welcome__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-welcome__media sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ah-welcome__img"} -->
<figure class="wp-block-image size-full ah-welcome__img"><img src="<?php echo ashiato_hotel_img( 'lobby-water-bowls.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p05' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ah-figs sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ah-figs sp-stagger"><!-- wp:group {"className":"ah-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ah-fig"><!-- wp:paragraph {"className":"ah-fig__n sp-count"} -->
<p class="ah-fig__n sp-count">14</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-fig__l"} -->
<p class="ah-fig__l"><?php echo esc_html( ashiato_hotel_t( 'fig_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ah-fig"><!-- wp:paragraph {"className":"ah-fig__n sp-count"} -->
<p class="ah-fig__n sp-count">40</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-fig__l"} -->
<p class="ah-fig__l"><?php echo esc_html( ashiato_hotel_t( 'fig_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ah-fig"><!-- wp:paragraph {"className":"ah-fig__n sp-count"} -->
<p class="ah-fig__n sp-count">1,200</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-fig__l"} -->
<p class="ah-fig__l"><?php echo esc_html( ashiato_hotel_t( 'fig_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ah-fig"><!-- wp:paragraph {"className":"ah-fig__n sp-count"} -->
<p class="ah-fig__n sp-count">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-fig__l"} -->
<p class="ah-fig__l"><?php echo esc_html( ashiato_hotel_t( 'fig_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-trail ah-trail--dl sp-stagger" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
