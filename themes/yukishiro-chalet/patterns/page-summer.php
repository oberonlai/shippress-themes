<?php
/**
 * Title: Page: Summer
 * Slug: yukishiro-chalet/page-summer
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Page head, summer package strip and the trail table.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( yukishiro_chalet_img( 'card-hiking-week.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":480,"minHeightUnit":"px","contentPosition":"center center","isDark":true,"className":"yk-ph sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light yk-ph sp-parallax" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p10' ) ); ?>" src="<?php echo esc_url( yukishiro_chalet_img( 'card-hiking-week.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"yk-lead yk-lead--w"} -->
<p class="yk-lead yk-lead--w"><?php echo esc_html( yukishiro_chalet_t( 'ph_summer_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-h1"} -->
<h1 class="wp-block-heading yk-h1"><?php echo esc_html( yukishiro_chalet_t( 'ph_summer_h1' ) ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<svg class="yk-seam yk-seam--page" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0,40 C360,120 1080,120 1440,40 L1440,120 L0,120 Z" fill="#FFFFFF"/></svg>
<!-- /wp:html -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-plans","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-plans"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'c_summer_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'c_summer_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede yk-lede--full"} -->
<p class="yk-lede yk-lede--full"><?php echo esc_html( yukishiro_chalet_t( 'c_summer_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-plans yk-sec--flush","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-plans yk-sec--flush"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:html -->
<div class="yk-bar"><div class="yk-tabs" role="group" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'tabs_label' ) ); ?>"></div><div class="yk-arrows"><button type="button" class="yk-arrow" data-yk-dir="-1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'prev' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M9 2 4 7l5 5"/></svg></button><button type="button" class="yk-arrow" data-yk-dir="1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'next' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 2 5 5-5 5"/></svg></button></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"yk-strip","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip"><!-- wp:group {"className":"yk-card yk-card--summer","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--summer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'hut-trail.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'card_hiking-week_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'card_hiking-week_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'card_hiking-week_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#hiking-week"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--summer","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--summer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-hut-to-hut.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'card_hut-to-hut_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'card_hut-to-hut_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'card_hut-to-hut_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#hut-to-hut"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--summer","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--summer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-summer-weekend.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'card_summer-weekend_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'card_summer-weekend_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'card_summer-weekend_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#summer-weekend"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="yk-dots" aria-hidden="true"><span class="is-active"></span><span></span><span></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_summer_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_summer_0_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split"><!-- wp:heading {"className":"yk-sh"} -->
<h2 class="wp-block-heading yk-sh"><?php echo esc_html( yukishiro_chalet_t( 's_summer_1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp"} -->
<p class="yk-sp"><?php echo esc_html( yukishiro_chalet_t( 's_summer_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"yk-table yk-table--narrow"} -->
<figure class="wp-block-table yk-table yk-table--narrow"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( yukishiro_chalet_t( 'th_trail' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></th><th class="yk-from"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></th></tr></thead><tbody><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'trail1' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></span>9 km</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></span>+420 m</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></span>3 h</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'trail2' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></span>14 km</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></span>+780 m</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></span>5 h</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'trail3' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></span>6 km</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></span>+210 m</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></span>2 h</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'trail4' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></span>16 km</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></span>+1,050 m</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></span>6.5 h</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'trail5' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dist' ) ); ?></span>8 km</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_climb' ) ); ?></span>+300 m</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_time' ) ); ?></span>2.5 h</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-rows sp-stagger"><!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'hut_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'hut_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_summer_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_summer_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--cta","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--cta"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:buttons {"className":"yk-cta"} -->
<div class="wp-block-buttons yk-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'cta_compare' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
