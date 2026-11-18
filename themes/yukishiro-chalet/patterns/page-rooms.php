<?php
/**
 * Title: Page: Rooms
 * Slug: yukishiro-chalet/page-rooms
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Page head, room strip and the room table.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( yukishiro_chalet_img( 'chalet-exterior.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":480,"minHeightUnit":"px","contentPosition":"center center","isDark":true,"className":"yk-ph sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light yk-ph sp-parallax" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p16' ) ); ?>" src="<?php echo esc_url( yukishiro_chalet_img( 'chalet-exterior.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"yk-lead yk-lead--w"} -->
<p class="yk-lead yk-lead--w"><?php echo esc_html( yukishiro_chalet_t( 'ph_rooms_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-h1"} -->
<h1 class="wp-block-heading yk-h1"><?php echo esc_html( yukishiro_chalet_t( 'ph_rooms_h1' ) ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<svg class="yk-seam yk-seam--page" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0,40 C360,120 1080,120 1440,40 L1440,120 L0,120 Z" fill="#FFFFFF"/></svg>
<!-- /wp:html -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-plans","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-plans"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'c_rooms_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'c_rooms_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede yk-lede--full"} -->
<p class="yk-lede yk-lede--full"><?php echo esc_html( yukishiro_chalet_t( 'c_rooms_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-plans yk-sec--flush","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-plans yk-sec--flush"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:html -->
<div class="yk-bar"><div class="yk-tabs" role="group" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'tabs_label' ) ); ?>"><button type="button" class="is-active" data-yk-filter="all" aria-pressed="true"><?php echo esc_html( yukishiro_chalet_t( 'tab_all' ) ); ?></button><button type="button" data-yk-filter="twin" aria-pressed="false"><?php echo esc_html( yukishiro_chalet_t( 'tab_twin' ) ); ?></button><button type="button" data-yk-filter="double" aria-pressed="false"><?php echo esc_html( yukishiro_chalet_t( 'tab_double' ) ); ?></button><button type="button" data-yk-filter="family" aria-pressed="false"><?php echo esc_html( yukishiro_chalet_t( 'tab_family' ) ); ?></button></div><div class="yk-arrows"><button type="button" class="yk-arrow" data-yk-dir="-1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'prev' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M9 2 4 7l5 5"/></svg></button><button type="button" class="yk-arrow" data-yk-dir="1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'next' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 2 5 5-5 5"/></svg></button></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"yk-strip","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip"><!-- wp:group {"className":"yk-card yk-card--twin yk-card--double","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--twin yk-card--double"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'room-double.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'rc_double_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'rc_double_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'rc_double_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'rooms_enquire' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'cmp_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--family","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--family"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'room-family.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'rc_family_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'rc_family_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'rc_family_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'rooms_enquire' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'cmp_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--family","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--family"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'room-loft.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'rc_loft_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'rc_loft_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'rc_loft_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'rooms_enquire' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'cmp_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'lounge-fire.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t"><?php echo esc_html( yukishiro_chalet_t( 'rc_lounge_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x"><?php echo esc_html( yukishiro_chalet_t( 'rc_lounge_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p"><?php echo esc_html( yukishiro_chalet_t( 'rc_lounge_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( yukishiro_chalet_t( 'rc_about' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="yk-dots" aria-hidden="true"><span class="is-active"></span><span></span><span></span><span></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:table {"className":"yk-table yk-table--narrow"} -->
<figure class="wp-block-table yk-table yk-table--narrow"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( yukishiro_chalet_t( 'th_room' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></th><th class="yk-from"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></th></tr></thead><tbody><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'room1_n' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></span>22 m²</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></span>2</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></span>6</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'room2_n' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></span>26 m²</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></span>2</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></span>7</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'room3_n' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></span>34 m²</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></span>4</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></span>4</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'room4_n' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></span>48 m²</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></span>4</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></span>1</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'rooms_total' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_size' ) ); ?></span>–</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_sleeps' ) ); ?></span>–</td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_count' ) ); ?></span>18</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_0_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_rooms_2_b' ) ); ?></p>
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
