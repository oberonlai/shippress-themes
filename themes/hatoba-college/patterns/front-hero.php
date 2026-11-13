<?php
/**
 * Title: Home: framed window
 * Slug: hatoba-college/front-hero
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Framed 2.4:1 harbour window under the header: three cross-fading photographs, a docked navy caption bar, a white pager notch, a faint contact-sheet strip, the twelve-week tick line and the headline row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"hc-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull hc-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-strip"} -->
<figure class="wp-block-image size-full hc-strip"><img src="<?php echo hatoba_college_img( 'p15-harbour-panorama.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-frame","layout":{"type":"default"}} -->
<div class="wp-block-group hc-frame"><!-- wp:group {"className":"hc-window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hc-window sp-parallax"><!-- wp:group {"className":"hc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group hc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-slide hc-slide--1 is-active"} -->
<figure class="wp-block-image size-full hc-slide hc-slide--1 is-active"><img src="<?php echo hatoba_college_img( 'p01-bridge-console.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="hc-slide hc-slide--2"><img src="<?php echo hatoba_college_img( 'p02-mooring-line.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p02' ) ); ?>" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="hc-slide hc-slide--3"><img src="<?php echo hatoba_college_img( 'p03-bridge-wing.webp' ); ?>" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p03' ) ); ?>" decoding="async"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-capbar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-capbar"><!-- wp:paragraph {"className":"hc-cap is-active"} -->
<p class="hc-cap is-active"><?php echo esc_html( hatoba_college_t( 'cap_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cap"} -->
<p class="hc-cap"><?php echo esc_html( hatoba_college_t( 'cap_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-cap"} -->
<p class="hc-cap"><?php echo esc_html( hatoba_college_t( 'cap_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-notch"><button class="hc-arrow hc-arrow--prev" type="button" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_prev' ) ); ?>"><svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true" focusable="false"><path d="M11.5 3 5.5 9l6 6" fill="none" stroke="currentColor" stroke-width="2"/></svg></button><span class="hc-dots"><button class="hc-dot is-active" type="button" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_slide' ) ); ?> 1" aria-current="true"></button><button class="hc-dot" type="button" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_slide' ) ); ?> 2"></button><button class="hc-dot" type="button" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_slide' ) ); ?> 3"></button></span><button class="hc-arrow hc-arrow--next" type="button" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_next' ) ); ?>"><svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true" focusable="false"><path d="M6.5 3l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2"/></svg></button><button class="hc-pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( hatoba_college_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( hatoba_college_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( hatoba_college_t( 'pager_play' ) ); ?>"><svg class="hc-pause__i hc-pause__i--pause" width="12" height="12" viewBox="0 0 12 12" aria-hidden="true" focusable="false"><path d="M2 1h3v10H2zM7 1h3v10H7z" fill="currentColor"/></svg><svg class="hc-pause__i hc-pause__i--play" width="12" height="12" viewBox="0 0 12 12" aria-hidden="true" focusable="false"><path d="M2 1l9 5-9 5z" fill="currentColor"/></svg></button></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-ticks" aria-hidden="true"><span class="hc-ticks__fill"></span><ol class="hc-ticks__list"><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>1</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>4</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>8</span></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick"></li><li class="hc-tick hc-tick--lab"><span class="hc-ticks__lab"><?php echo esc_html( hatoba_college_t( 'wk_short' ) ); ?>12</span></li></ol></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__row"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'hero_h1_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'hero_h1_r' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__side"><!-- wp:paragraph {"className":"hc-lede"} -->
<p class="hc-lede"><?php echo esc_html( hatoba_college_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-btns"} -->
<div class="wp-block-buttons hc-btns"><!-- wp:button {"className":"hc-btn"} -->
<div class="wp-block-button hc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo hatoba_college_url( '/the-course/' ); ?>"><?php echo esc_html( hatoba_college_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"hc-btn hc-btn--text"} -->
<div class="wp-block-button hc-btn hc-btn--text"><a class="wp-block-button__link wp-element-button" href="<?php echo hatoba_college_url( '/programmes/' ); ?>"><?php echo esc_html( hatoba_college_t( 'hero_cta2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
