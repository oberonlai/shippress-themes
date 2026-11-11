<?php
/**
 * Title: Inner: stories
 * Slug: kashidashi-hire/inner-stories
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Stories page head, a three-tab finder over the four hires and the four ruled story rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-hero kh-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hero kh-ihead"><!-- wp:group {"className":"kh-wedge kh-wedge--i","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wedge kh-wedge--i"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__stage kh-ihead__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stage kh-ihead__stage"><!-- wp:group {"className":"kh-hero__photo kh-ihead__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__photo kh-ihead__photo sp-parallax"><!-- wp:group {"className":"kh-hero__stack sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stack sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-ihead__img"} -->
<figure class="wp-block-image size-full kh-ihead__img"><img src="<?php echo kashidashi_hire_img( 'p17-tailgate-sheet' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy kh-ihead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy kh-ihead__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'ih_stor_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title kh-ihead__title"} -->
<h1 class="wp-block-heading kh-hero__title kh-ihead__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'ih_stor_h1' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-dock kh-dock--one","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock kh-dock--one"><!-- wp:group {"className":"kh-dock__b","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock__b"><!-- wp:paragraph {"className":"kh-dock__next"} -->
<p class="kh-dock__next"><span><?php echo esc_html( kashidashi_hire_t( 'dk_next' ) ); ?></span> <strong><?php echo esc_html( kashidashi_hire_t( 'dk_date' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-dock__req"} -->
<p class="kh-dock__req"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'dk_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ilead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ilead"><!-- wp:group {"className":"kh-ilead__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ilead__in"><!-- wp:paragraph {"className":"kh-lead kh-lead--big sp-reveal sp-reveal--up"} -->
<p class="kh-lead kh-lead--big sp-reveal sp-reveal--up"><?php echo esc_html( kashidashi_hire_t( 'i_stories_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-fleet kh-fleet--i","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-fleet kh-fleet--i"><!-- wp:group {"className":"kh-wipe kh-wipe--fleet sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe kh-wipe--fleet sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kh-wipe__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe__in"><!-- wp:group {"className":"kh-mist","layout":{"type":"default"}} -->
<div class="wp-block-group kh-mist"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-fleet__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-fleet__in"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'sf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-fleet__title"} -->
<h2 class="wp-block-heading kh-fleet__title"><?php echo esc_html( kashidashi_hire_t( 'sf_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-finder","layout":{"type":"default"}} -->
<div class="wp-block-group kh-finder"><!-- wp:html -->
<input class="kh-tabin" type="radio" name="kh-s" id="kh-s1" checked><input class="kh-tabin" type="radio" name="kh-s" id="kh-s2"><input class="kh-tabin" type="radio" name="kh-s" id="kh-s3">
<div class="kh-tabs"><label for="kh-s1"><?php echo esc_html( kashidashi_hire_t( 'sf_t1' ) ); ?></label><label for="kh-s2"><?php echo esc_html( kashidashi_hire_t( 'sf_t2' ) ); ?></label><label for="kh-s3"><?php echo esc_html( kashidashi_hire_t( 'sf_t3' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kh-pane kh-pane1 kh-pane1--list","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane1 kh-pane1--list"><!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-1"><?php echo esc_html( kashidashi_hire_t( 'sm_m1' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-2"><?php echo esc_html( kashidashi_hire_t( 'sm_m2' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-3"><?php echo esc_html( kashidashi_hire_t( 'sm_m3' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-4"><?php echo esc_html( kashidashi_hire_t( 'sm_m4' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-pane kh-pane2 kh-pane2--list","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane2 kh-pane2--list"><!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-1"><?php echo esc_html( kashidashi_hire_t( 'sm_j1' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-2"><?php echo esc_html( kashidashi_hire_t( 'sm_j2' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-3"><?php echo esc_html( kashidashi_hire_t( 'sm_j3' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-4"><?php echo esc_html( kashidashi_hire_t( 'sm_j4' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-pane kh-pane3","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane3"><!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-1"><?php echo esc_html( kashidashi_hire_t( 'sm_s1' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-2"><?php echo esc_html( kashidashi_hire_t( 'sm_s2' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-3"><?php echo esc_html( kashidashi_hire_t( 'sm_s3' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><a href="#story-4"><?php echo esc_html( kashidashi_hire_t( 'sm_s4' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'sm_w4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-stories kh-stories--i","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-stories kh-stories--i"><!-- wp:group {"className":"kh-stories__list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-stories__list sp-stagger"><!-- wp:group {"anchor":"story-1","className":"kh-story kh-story--i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-1" class="wp-block-group kh-story kh-story--i sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p04-micro-trench' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'sm_w1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><?php echo esc_html( kashidashi_hire_t( 'i_stories_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'i_stories_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"story-2","className":"kh-story kh-story--i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-2" class="wp-block-group kh-story kh-story--i sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p05-dumper-school' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'sm_w2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><?php echo esc_html( kashidashi_hire_t( 'i_stories_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'i_stories_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"story-3","className":"kh-story kh-story--i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-3" class="wp-block-group kh-story kh-story--i sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p06-roller-path' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'sm_w3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><?php echo esc_html( kashidashi_hire_t( 'i_stories_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'i_stories_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"story-4","className":"kh-story kh-story--i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-4" class="wp-block-group kh-story kh-story--i sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p18-cleared-plot' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-story__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className":"kh-tag"} -->
<p class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'sm_w4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-story__t"} -->
<h3 class="wp-block-heading kh-story__t"><?php echo esc_html( kashidashi_hire_t( 'i_stories_h4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-story__d"} -->
<p class="kh-story__d"><?php echo esc_html( kashidashi_hire_t( 'i_stories_b4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kh-more"} -->
<p class="kh-more"><a href="/foundry-row-drains-on-a-narrow-terrace/"><?php echo esc_html( kashidashi_hire_t( 'sf_read' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
