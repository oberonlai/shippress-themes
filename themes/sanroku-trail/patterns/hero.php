<?php
/**
 * Title: Hero: flush film still and race rows
 * Slug: sanroku-trail/hero
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Full-bleed film still with a vertical headline in the sky and the four races as ruled rows directly under the photo.
 */
?>
<!-- wp:cover {"url":"<?php echo sanroku_trail_img( 'p01-ridge-marshal.webp' ); ?>","alt":"<?php echo sanroku_trail_a( 'alt_p01' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.85},"minHeight":600,"minHeightUnit":"px","tagName":"section","className":"st-hero sp-parallax"} -->
<section class="wp-block-cover st-hero sp-parallax" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sanroku_trail_a( 'alt_p01' ); ?>" src="<?php echo sanroku_trail_img( 'p01-ridge-marshal.webp' ); ?>" style="object-position:50% 85%" data-object-fit="cover" data-object-position="50% 85%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"st-h1"} -->
<h1 class="wp-block-heading st-h1"><span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'hero_h1_a' ) ); ?></span> <span class="st-h1__l"><?php echo esc_html( sanroku_trail_t( 'hero_h1_b' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-cap"} -->
<p class="st-cap"><?php echo esc_html( sanroku_trail_t( 'hero_cap_1' ) ); ?><br><?php echo esc_html( sanroku_trail_t( 'hero_cap_2' ) ); ?></p>
<!-- /wp:paragraph --></div></section>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","className":"st-rows","layout":{"type":"default"}} -->
<section class="wp-block-group st-rows"><!-- wp:paragraph {"className":"st-row"} -->
<p class="st-row"><a href="<?php echo esc_url( home_url( '/races/#snowmelt-21' ) ); ?>"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'row_1_chip' ) ); ?></span><span class="st-row__d"><?php echo esc_html( sanroku_trail_t( 'row_1_date' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'row_1_name' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'row_1_cut' ) ); ?></span><svg class="st-chev" viewBox="0 0 8 14" width="8" height="14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row"} -->
<p class="st-row"><a href="<?php echo esc_url( home_url( '/races/#beech-line-32' ) ); ?>"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'row_2_chip' ) ); ?></span><span class="st-row__d"><?php echo esc_html( sanroku_trail_t( 'row_2_date' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'row_2_name' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'row_2_cut' ) ); ?></span><svg class="st-chev" viewBox="0 0 8 14" width="8" height="14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row"} -->
<p class="st-row"><a href="<?php echo esc_url( home_url( '/races/#gorge-45' ) ); ?>"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'row_3_chip' ) ); ?></span><span class="st-row__d"><?php echo esc_html( sanroku_trail_t( 'row_3_date' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'row_3_name' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'row_3_cut' ) ); ?></span><svg class="st-chev" viewBox="0 0 8 14" width="8" height="14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row"} -->
<p class="st-row"><a href="<?php echo esc_url( home_url( '/races/#autumn-ridge-60' ) ); ?>"><span class="st-chip"><?php echo esc_html( sanroku_trail_t( 'row_4_chip' ) ); ?></span><span class="st-row__d"><?php echo esc_html( sanroku_trail_t( 'row_4_date' ) ); ?></span><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'row_4_name' ) ); ?></span><span class="st-row__c"><?php echo esc_html( sanroku_trail_t( 'row_4_cut' ) ); ?></span><svg class="st-chev" viewBox="0 0 8 14" width="8" height="14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-row st-row--all"} -->
<p class="st-row st-row--all"><a href="<?php echo esc_url( home_url( '/races/' ) ); ?>"><span class="st-row__n"><?php echo esc_html( sanroku_trail_t( 'row_all' ) ); ?></span><svg class="st-chev" viewBox="0 0 8 14" width="8" height="14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"st-hero__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons st-hero__cta"><!-- wp:button {"className":"st-btn"} -->
<div class="wp-block-button st-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/enter/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
