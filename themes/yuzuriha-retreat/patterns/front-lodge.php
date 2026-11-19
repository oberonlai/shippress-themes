<?php
/**
 * Title: Home: the lodge, two offset photographs
 * Slug: yuzuriha-retreat/front-lodge
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: White band with a 1.27:1 photograph, a 0.72:1 photograph offset 280px lower on the right, an outline circle docked at its lower left, and the text under the first photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--white yr-sec--lodge","layout":{"type":"default"},"anchor":"lodge"} -->
<section id="lodge" class="wp-block-group yr-sec yr-sec--white yr-sec--lodge"><!-- wp:group {"className":"yr-lodge","layout":{"type":"default"}} -->
<div class="wp-block-group yr-lodge"><!-- wp:group {"className":"yr-lodge__a","layout":{"type":"default"}} -->
<div class="wp-block-group yr-lodge__a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-lodge__img"} -->
<figure class="wp-block-image size-full yr-lodge__img"><img src="<?php echo yuzuriha_retreat_img( 'p09-lodge-slope.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-lodge__b","layout":{"type":"default"}} -->
<div class="wp-block-group yr-lodge__b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-lodge__img"} -->
<figure class="wp-block-image size-full yr-lodge__img"><img src="<?php echo yuzuriha_retreat_img( 'p10-empty-hall.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yr-circle"} -->
<p class="yr-circle"><a href="<?php echo yuzuriha_retreat_url( '/rooms/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'circle_rooms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-lodge__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-lodge__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
<div class="wp-block-group yr-rows"><!-- wp:paragraph {"className":"yr-row yr-row--fact"} -->
<p class="yr-row yr-row--fact"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--fact"} -->
<p class="yr-row yr-row--fact"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--fact"} -->
<p class="yr-row yr-row--fact"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_f3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-row yr-row--fact"} -->
<p class="yr-row yr-row--fact"><?php echo esc_html( yuzuriha_retreat_t( 'lodge_f4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
