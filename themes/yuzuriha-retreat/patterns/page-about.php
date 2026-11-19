<?php
/**
 * Title: Page: About
 * Slug: yuzuriha-retreat/page-about
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, portrait with an outline circle and the three essay paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p09-lodge-slope.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--retreat","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone yr-sec--retreat"><!-- wp:group {"className":"yr-retreat yr-retreat--page","layout":{"type":"default"}} -->
<div class="wp-block-group yr-retreat yr-retreat--page"><!-- wp:html -->
<p class="yr-vert" aria-hidden="true"><?php echo esc_html( yuzuriha_retreat_t( 'vert_about' ) ); ?></p>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-portrait sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group yr-portrait sp-reveal sp-reveal--mask"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-portrait__img"} -->
<figure class="wp-block-image size-full yr-portrait__img"><img src="<?php echo yuzuriha_retreat_img( 'p02-blanket-guest.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yr-circle"} -->
<p class="yr-circle"><a href="<?php echo yuzuriha_retreat_url( '/teachers/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'circle_since' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-retreat__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-retreat__text"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'about_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-split__h yr-split__h--solo"} -->
<h2 class="wp-block-heading yr-split__h yr-split__h--solo"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-split__h yr-split__h--solo"} -->
<h2 class="wp-block-heading yr-split__h yr-split__h--solo"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-split__h yr-split__h--solo"} -->
<h2 class="wp-block-heading yr-split__h yr-split__h--solo"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-body"} -->
<p class="yr-body"><?php echo esc_html( yuzuriha_retreat_t( 'p_about_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-more yr-more--left"} -->
<p class="yr-more yr-more--left"><a href="<?php echo yuzuriha_retreat_url( '/teachers/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'about_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
