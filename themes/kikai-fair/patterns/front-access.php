<?php
/**
 * Title: Home: parallax access band with two white boxes
 * Slug: kikai-fair/front-access
 * Categories: kikai-fair
 * Keywords: parallax, access, floor plan
 * Viewport Width: 1440
 * Description: Full-bleed dimmed photo with a slow parallax and two white boxes: getting there and the floor plan.
 */
?>
<!-- wp:cover {"url":"<?php echo kikai_fair_img( 'p01-empty-aisle.webp' ); ?>","dimRatio":40,"overlayColor":"night","minHeight":480,"isDark":true,"align":"full","className":"sp-parallax kf-access","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull sp-parallax kf-access" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-night-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kikai_fair_t( 'a48d4f1bc' ) ); ?>" src="<?php echo kikai_fair_img( 'p01-empty-aisle.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kf-access__boxes","layout":{"type":"default"}} -->
<div class="wp-block-group kf-access__boxes"><!-- wp:html -->
<a class="kf-box" href="/#come"><span class="kf-box__ic"><svg class="kf-pin" width="28" height="28" viewBox="0 0 28 28" aria-hidden="true" focusable="false"><path d="M14 2c-4.4 0-8 3.4-8 7.8C6 16 14 26 14 26s8-10 8-16.2C22 5.4 18.400 2 14 2Z" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="14" cy="10" r="3" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></span><span class="kf-box__t"><b><?php echo wp_kses_post( kikai_fair_t( 'kf509e9e1' ) ); ?></b><span><?php echo wp_kses_post( kikai_fair_t( 'k46ce45ed' ) ); ?></span></span><svg class="kf-arrow kf-arrow--long" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5.5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a><a class="kf-box" href="/exhibitors/#stand"><span class="kf-box__ic"><svg class="kf-pin" width="28" height="28" viewBox="0 0 28 28" aria-hidden="true" focusable="false"><path d="M3 6l7-3 8 3 7-3v19l-7 3-8-3-7 3Z M10 3v19 M18 6v19" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></span><span class="kf-box__t"><b><?php echo wp_kses_post( kikai_fair_t( 'ka80cff39' ) ); ?></b><span><?php echo wp_kses_post( kikai_fair_t( 'kb6e89187' ) ); ?></span></span><svg class="kf-arrow kf-arrow--long" width="48" height="8" viewBox="0 0 48 8" aria-hidden="true" focusable="false"><path d="M0 4H47M42.5.5 47 4l-4.5 3.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
