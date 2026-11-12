<?php
/**
 * Title: Home: focus-pull hangar hero and cohort strip
 * Slug: tsubasa-college/front-hero
 * Categories: tsubasa-college
 * Keywords: hero, photo, intake
 * Viewport Width: 1440
 * Description: A full-bleed hangar photograph whose sharp centre window is flanked by blurred, stretched bands of the same frame, the headline over the lower left, two pills on the work points, and a slate cohort strip with a white notice card from the left edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"tc-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull tc-hero"><!-- wp:group {"align":"full","className":"tc-hero__stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-hero__stage sp-parallax"><!-- wp:group {"className":"sp-parallax__layer tc-hero__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer tc-hero__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-hero__bg"} -->
<figure class="wp-block-image size-full tc-hero__bg"><img src="<?php echo tsubasa_college_img( 'ts-01-cowling-check' ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-hero__sharp"} -->
<figure class="wp-block-image size-full tc-hero__sharp"><img src="<?php echo tsubasa_college_img( 'ts-01-cowling-check' ); ?>" alt="<?php echo esc_attr( tsubasa_college_t( 'alt_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-hero__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hero__in"><!-- wp:heading {"level":1,"className":"tc-hero__h1"} -->
<h1 class="wp-block-heading tc-hero__h1"><?php echo esc_html( tsubasa_college_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tc-label tc-label--hero"} -->
<p class="tc-label tc-label--hero"><?php echo esc_html( tsubasa_college_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tc-rule tc-rule--hero","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule tc-rule--hero"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tc-hero__sub"} -->
<p class="tc-hero__sub"><?php echo esc_html( tsubasa_college_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tc-kvpills","layout":{"type":"default"}} -->
<div class="wp-block-group tc-kvpills"><!-- wp:paragraph {"className":"tc-kvpill tc-kvpill--a"} -->
<p class="tc-kvpill tc-kvpill--a"><?php echo esc_html( tsubasa_college_t( 'hero_pill_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-kvpill tc-kvpill--b"} -->
<p class="tc-kvpill tc-kvpill--b"><?php echo esc_html( tsubasa_college_t( 'hero_pill_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tc-foot-strip","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-foot-strip"><!-- wp:group {"className":"tc-strip","layout":{"type":"default"}} -->
<div class="wp-block-group tc-strip"><!-- wp:paragraph {"className":"tc-strip__label"} -->
<p class="tc-strip__label"><?php echo esc_html( tsubasa_college_t( 'strip_label' ) ); ?> <span class="tc-chev tc-chev--white">›</span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__thumb"} -->
<figure class="wp-block-image size-full tc-card__thumb"><img src="<?php echo tsubasa_college_img( 'ts-02-briefing' ); ?>" alt="<?php echo esc_attr( tsubasa_college_t( 'alt_02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card__text"><!-- wp:paragraph {"className":"tc-card__title"} -->
<p class="tc-card__title"><?php echo esc_html( tsubasa_college_t( 'strip_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-card__meta"} -->
<p class="tc-card__meta"><?php echo esc_html( tsubasa_college_t( 'strip_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tc-card__link"} -->
<p class="tc-card__link"><a href="/admissions/"><?php echo esc_html( tsubasa_college_t( 'strip_link' ) ); ?></a> <span class="tc-chev">›</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
