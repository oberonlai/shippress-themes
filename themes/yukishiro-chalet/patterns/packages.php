<?php
/**
 * Title: Home: winter and summer packages
 * Slug: yukishiro-chalet/packages
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Tabs over a horizontal strip of wide photo cards with twin buttons, a dot pager and chevrons.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-plans","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-plans" id="packages"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'plans_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'plans_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede"} -->
<p class="yk-lede"><?php echo esc_html( yukishiro_chalet_t( 'plans_lede' ) ); ?> <a href="/packages/"><?php echo esc_html( yukishiro_chalet_t( 'plans_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="yk-bar"><div class="yk-tabs" role="group" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'tabs_label' ) ); ?>"><button type="button" class="is-active" data-yk-filter="all" aria-pressed="true"><?php echo esc_html( yukishiro_chalet_t( 'tab_all' ) ); ?></button><button type="button" data-yk-filter="winter" aria-pressed="false"><?php echo esc_html( yukishiro_chalet_t( 'tab_winter' ) ); ?></button><button type="button" data-yk-filter="summer" aria-pressed="false"><?php echo esc_html( yukishiro_chalet_t( 'tab_summer' ) ); ?></button></div><div class="yk-arrows"><button type="button" class="yk-arrow" data-yk-dir="-1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'prev' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M9 2 4 7l5 5"/></svg></button><button type="button" class="yk-arrow" data-yk-dir="1" aria-label="<?php echo esc_attr( yukishiro_chalet_t( 'next' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m5 2 5 5-5 5"/></svg></button></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"yk-strip","layout":{"type":"default"}} -->
<div class="wp-block-group yk-strip"><!-- wp:group {"className":"yk-card yk-card--winter","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--winter"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-ski-week.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t">{{t:card_ski-week_t|Ski week}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_ski-week_x|Seven nights with a six-day lift pass, half board and the drying room every morning.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_ski-week_p|from €1,640 · 7 nights}}</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#ski-week"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--winter","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--winter"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-ski-weekend.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t">{{t:card_ski-weekend_t|Ski weekend}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_ski-weekend_x|Three nights and a two-day pass: a short stay for a first look at the valley.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_ski-weekend_p|from €690 · 3 nights}}</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#ski-weekend"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--winter","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--winter"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-first-tracks.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t">{{t:card_first-tracks_t|First tracks}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_first-tracks_x|Five nights for beginners: pass included and four ski-school mornings at the door.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_first-tracks_p|from €1,280 · 5 nights}}</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yk-twin"} -->
<div class="wp-block-buttons yk-twin"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/#first-tracks"><?php echo esc_html( yukishiro_chalet_t( 'discover' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-card yk-card--summer","layout":{"type":"default"}} -->
<div class="wp-block-group yk-card yk-card--summer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yk-card__img"} -->
<figure class="wp-block-image size-full yk-card__img"><img src="<?php echo esc_url( yukishiro_chalet_img( 'card-hiking-week.webp' ) ); ?>" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"yk-card__t"} -->
<h3 class="wp-block-heading yk-card__t">{{t:card_hiking-week_t|Hiking week}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_hiking-week_x|Seven nights with a mountain guide on three days, ridges, lakes and the gondola included.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_hiking-week_p|from €1,120 · 7 nights}}</p>
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
<h3 class="wp-block-heading yk-card__t">{{t:card_hut-to-hut_t|Hut-to-hut}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_hut-to-hut_x|Four nights: two in the chalet and two in mountain huts along the high col route.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_hut-to-hut_p|from €860 · 4 nights}}</p>
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
<h3 class="wp-block-heading yk-card__t">{{t:card_summer-weekend_t|Long summer weekend}}</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-card__x"} -->
<p class="yk-card__x">{{t:card_summer-weekend_x|Three nights on the balcony side of the valley, with the gondola and two chairlifts included.}}</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-card__p"} -->
<p class="yk-card__p">{{t:card_summer-weekend_p|from €480 · 3 nights}}</p>
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
<div class="yk-dots" aria-hidden="true"><span class="is-active"></span><span></span><span></span><span></span><span></span><span></span></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
