<?php
/**
 * Title: Home: what a retreat is
 * Slug: yuzuriha-retreat/front-retreat
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Tall 0.57:1 portrait with an outline circle label and vertical micro text on the left, a parenthesised label, heading and three narrative paragraphs on the right.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist yr-sec--retreat","layout":{"type":"default"},"anchor":"retreat"} -->
<section id="retreat" class="wp-block-group yr-sec yr-sec--mist yr-sec--retreat"><!-- wp:group {"className":"yr-retreat","layout":{"type":"default"}} -->
<div class="wp-block-group yr-retreat"><!-- wp:html -->
<p class="yr-vert" aria-hidden="true"><?php echo esc_html( yuzuriha_retreat_t( 'vert_home' ) ); ?></p>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-portrait sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group yr-portrait sp-reveal sp-reveal--mask"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-portrait__img"} -->
<figure class="wp-block-image size-full yr-portrait__img"><img src="<?php echo yuzuriha_retreat_img( 'p02-blanket-guest.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yr-circle"} -->
<p class="yr-circle"><a href="<?php echo yuzuriha_retreat_url( '/about/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'circle_retreat' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-retreat__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-retreat__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-sign"} -->
<p class="yr-sign"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_sign' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-more"} -->
<p class="yr-more"><a href="<?php echo yuzuriha_retreat_url( '/about/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'retreat_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
