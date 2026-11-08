<?php
/**
 * Title: Home: pinned photo hero with slanted photo columns
 * Slug: koe-interpreters/front-hero
 * Categories: koe-interpreters
 * Keywords: interpreting, conference, booth
 * Viewport Width: 1440
 * Description: Full-bleed film-grain photograph behind a navy slanted scrim, a three-line headline, three slanted photo columns bleeding off the right and a phrase marquee with photo capsules at the foot.
 */
?>
<!-- wp:cover {"url":"<?php echo koe_interpreters_img( 'p01.webp' ); ?>","dimRatio":30,"overlayColor":"ink","focalPoint":{"x":0.62,"y":0.45},"isUserOverlayColor":true,"align":"full","className":"ko-hero sp-parallax","anchor":"top","layout":{"type":"default"}} -->
<div id="top" class="wp-block-cover alignfull ko-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( koe_interpreters_t( 'a06d67e80' ) ); ?>" src="<?php echo koe_interpreters_img( 'p01.webp' ); ?>" style="object-position:62% 45%" data-object-fit="cover" data-object-position="62% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:html -->
<div class="ko-scrim" aria-hidden="true"></div>
<!-- /wp:html --><!-- wp:group {"className":"ko-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ko-hero__copy"><!-- wp:heading {"level":1,"className":"ko-hero__h1"} -->
<h1 class="wp-block-heading ko-hero__h1"><span class="ko-line"><?php echo wp_kses_post( koe_interpreters_t( 'kd00af255' ) ); ?></span> <span class="ko-line"><?php echo wp_kses_post( koe_interpreters_t( 'k242ceba1' ) ); ?></span> <span class="ko-line"><?php echo wp_kses_post( koe_interpreters_t( 'ka236e6a4' ) ); ?></span></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ko-hero__sub"} -->
<p class="ko-hero__sub"><?php echo wp_kses_post( koe_interpreters_t( 'k4cd894b1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"ko-hero__cta"} -->
<div class="wp-block-buttons ko-hero__cta"><!-- wp:button {"className":"ko-pill"} -->
<div class="wp-block-button ko-pill"><a class="wp-block-button__link wp-element-button" href="#request"><?php echo wp_kses_post( koe_interpreters_t( 'kff78594b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-cols","layout":{"type":"default"}} -->
<div class="wp-block-group ko-cols"><!-- wp:group {"className":"ko-cols__rot","layout":{"type":"default"}} -->
<div class="wp-block-group ko-cols__rot"><!-- wp:group {"className":"ko-col ko-col--1 ko-par-4 sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ko-col ko-col--1 ko-par-4 sp-parallax__layer"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ko-card"} -->
<figure class="wp-block-image size-large ko-card"><img src="<?php echo koe_interpreters_img( 'p02.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'a508dff08' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-col ko-col--2 ko-par-8 sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ko-col ko-col--2 ko-par-8 sp-parallax__layer"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ko-card"} -->
<figure class="wp-block-image size-large ko-card"><img src="<?php echo koe_interpreters_img( 'p03.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'ad62d09c3' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ko-card"} -->
<figure class="wp-block-image size-large ko-card"><img src="<?php echo koe_interpreters_img( 'p04.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'a02f2afd3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-col ko-col--3 ko-par-12 sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ko-col ko-col--3 ko-par-12 sp-parallax__layer"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ko-card"} -->
<figure class="wp-block-image size-large ko-card"><img src="<?php echo koe_interpreters_img( 'p05.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'aefd0b7cc' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-strip sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group ko-strip sp-marquee"><!-- wp:paragraph {"className":"ko-strip__in"} -->
<p class="ko-strip__in"><?php echo wp_kses_post( koe_interpreters_t( 'ka7fea5b6' ) ); ?> <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p06.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'aadc57329' ) ); ?>"/> <?php echo wp_kses_post( koe_interpreters_t( 'ke9dda567' ) ); ?> <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p07.webp' ); ?>" alt="<?php echo esc_attr( koe_interpreters_t( 'a13580b25' ) ); ?>"/> <?php echo wp_kses_post( koe_interpreters_t( 'kb0cc5017' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="ko-strip__in" aria-hidden="true"><?php echo wp_kses_post( koe_interpreters_t( 'ka7fea5b6' ) ); ?> <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p06.webp' ); ?>" alt=""/> <?php echo wp_kses_post( koe_interpreters_t( 'ke9dda567' ) ); ?> <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p07.webp' ); ?>" alt=""/> <?php echo wp_kses_post( koe_interpreters_t( 'kb0cc5017' ) ); ?></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
