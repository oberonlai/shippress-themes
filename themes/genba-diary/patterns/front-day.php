<?php
/**
 * Title: Home: diary-day cards
 * Slug: genba-diary/front-day
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Label, heading, paragraph and six feature cards: 16:9 photograph with an icon tile overlapping its corner, title, one line and a VIEW MORE dash link, with an edge tab.
 */
?>
<!-- wp:group {"className":"gd-day gd-sec","layout":{"type":"default"},"tagName":"section","anchor":"day","align":"full"} -->
<section id="day" class="wp-block-group alignfull gd-day gd-sec"><!-- wp:html -->
<span class="gd-tab" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_day' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'day_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-day__p sp-reveal sp-reveal--up"} -->
<p class="gd-day__p sp-reveal sp-reveal--up"><?php echo esc_html( genba_diary_t( 'day_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wide"><!-- wp:group {"className":"gd-cards gd-cards--f sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gd-cards gd-cards--f sp-stagger"><!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g06-morning-board.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g06' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="5" width="22" height="22"/><path d="M5 12h22M5 19h22M13 5v22"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#board"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g07-gate-sunrise.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g07' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="11" r="4"/><circle cx="22" cy="12" r="3"/><path d="M4 26c0-5 3.5-8 8-8s8 3 8 8M20 20c4-1 8 1 8 6"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#crew"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g08-delivery-check.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h16v13H3zM19 13h6l4 5v4H19z"/><circle cx="9" cy="24" r="2.5"/><circle cx="24" cy="24" r="2.5"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#truck"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g09-rebar-photo.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10h5l2-3h10l2 3h5v16H4z"/><circle cx="16" cy="17" r="5"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#photo"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g11-rain-tarps.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19a6 6 0 0 1 1-12 8 8 0 0 1 15 3 4.5 4.5 0 0 1-1 9z"/><path d="M11 23l-2 4M17 23l-2 4M23 23l-2 4"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day5_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day5_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#weather"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-fcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-fcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"gd-media","layout":{"type":"default"}} -->
<div class="wp-block-group gd-media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-fcard__img"} -->
<figure class="wp-block-image size-full gd-fcard__img"><img src="<?php echo genba_diary_img( 'g10-signoff.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="gd-ico" aria-hidden="true"><svg viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="12"/><path d="M10 16.5l4.5 4.5L22.5 11"/></svg></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'day6_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'day6_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/diary-day/#sign"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
