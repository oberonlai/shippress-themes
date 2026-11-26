<?php
/**
 * Title: Home: hero with booking bar
 * Slug: shirogane-college/front-hero
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Pine panel with a hexagon point on the left, a cross-dissolving set of three ward photographs on the right, and a three-cell booking bar under it.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"sg-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull sg-hero">
<!-- wp:group {"className":"sg-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-hero__panel">
<!-- wp:paragraph {"className":"sg-eyebrow"} -->
<p class="sg-eyebrow"><?php echo esc_html( shirogane_college_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sg-hero__h1"} -->
<h1 class="wp-block-heading sg-hero__h1"><?php echo shirogane_college_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-hero__lead"} -->
<p class="sg-hero__lead"><?php echo esc_html( shirogane_college_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sg-btns"} -->
<div class="wp-block-buttons sg-btns"><!-- wp:button {"className":"sg-btn sg-btn--onpine"} -->
<div class="wp-block-button sg-btn sg-btn--onpine"><a class="wp-block-button__link wp-element-button" href="#day"><?php echo esc_html( shirogane_college_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-hero__media","layout":{"type":"default"}} -->
<div class="wp-block-group sg-hero__media">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-still sg-still--1"} -->
<figure class="wp-block-image size-full sg-still sg-still--1"><img src="<?php echo shirogane_college_img( 'hero-ward-bandage.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<figure class="wp-block-image size-full sg-still sg-still--2" aria-hidden="true"><img src="<?php echo shirogane_college_img( 'hero-ward-cat.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p02' ) ); ?>"/></figure>
<figure class="wp-block-image size-full sg-still sg-still--3" aria-hidden="true"><img src="<?php echo shirogane_college_img( 'hero-ward-tray.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sg-bookbar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sg-bookbar">
<!-- wp:html -->
<div class="sg-bookbar__in"><a class="sg-book" style="--sg-rule:#5C6B48" href="/admissions/#apply"><span class="sg-book__t"><?php echo esc_html( shirogane_college_t( 'book_apply' ) ); ?></span><span class="sg-book__d"><?php echo esc_html( shirogane_college_t( 'book_apply_d' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-book" style="--sg-rule:#8E6E2A" href="/visit/#open-day"><span class="sg-book__t"><?php echo esc_html( shirogane_college_t( 'book_open' ) ); ?></span><span class="sg-book__d"><?php echo esc_html( shirogane_college_t( 'book_open_d' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-book" style="--sg-rule:#3F7C85" href="/visit/#ward-visit"><span class="sg-book__t"><?php echo esc_html( shirogane_college_t( 'book_visit' ) ); ?></span><span class="sg-book__d"><?php echo esc_html( shirogane_college_t( 'book_visit_d' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->