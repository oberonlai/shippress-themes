<?php
/**
 * Title: Home: hero
 * Slug: kashidashi-hire/front-hero
 * Categories: kashidashi-hire
 * Description: Pine slant-cut tab and wedge, inset 3-photo crossfade with ink headline strips, the two-cell hire dock and the yard board bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hero"><!-- wp:group {"className":"kh-wedge","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wedge"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kh-scroll"} -->
<p class="kh-scroll"><?php echo esc_html( kashidashi_hire_t( 'hr_scroll' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stage"><!-- wp:group {"className":"kh-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__photo sp-parallax"><!-- wp:group {"className":"kh-hero__stack sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stack sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-slide"} -->
<figure class="wp-block-image size-full kh-slide"><img src="<?php echo kashidashi_hire_img( 'p01-handover' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-slide"} -->
<figure class="wp-block-image size-full kh-slide"><img src="<?php echo kashidashi_hire_img( 'p02-yard-line' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-slide"} -->
<figure class="wp-block-image size-full kh-slide"><img src="<?php echo kashidashi_hire_img( 'p03-low-loader' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'hr_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title"} -->
<h1 class="wp-block-heading kh-hero__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'hr_l1' ) ); ?></span><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'hr_l2' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-dock","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock"><!-- wp:paragraph {"className":"kh-dock__a"} -->
<p class="kh-dock__a"><a href="#fleet"><?php echo esc_html( kashidashi_hire_t( 'dk_browse' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-dock__b","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock__b"><!-- wp:paragraph {"className":"kh-dock__next"} -->
<p class="kh-dock__next"><span><?php echo esc_html( kashidashi_hire_t( 'dk_next' ) ); ?></span> <strong><?php echo esc_html( kashidashi_hire_t( 'dk_date' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-dock__req"} -->
<p class="kh-dock__req"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'dk_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-notice","layout":{"type":"default"}} -->
<div class="wp-block-group kh-notice"><!-- wp:paragraph {"className":"kh-notice__title"} -->
<p class="kh-notice__title"><strong><?php echo esc_html( kashidashi_hire_t( 'nb_title' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-notice__date"} -->
<p class="kh-notice__date"><?php echo esc_html( kashidashi_hire_t( 'nb_date' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-notice__tag"} -->
<p class="kh-notice__tag"><?php echo esc_html( kashidashi_hire_t( 'nb_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-notice__text"} -->
<p class="kh-notice__text"><?php echo esc_html( kashidashi_hire_t( 'nb_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-notice__link"} -->
<p class="kh-notice__link"><a href="#out"><?php echo esc_html( kashidashi_hire_t( 'nb_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
