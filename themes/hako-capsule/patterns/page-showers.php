<?php
/**
 * Title: Page: Day-use showers
 * Slug: hako-capsule/page-showers
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: Showers page: head photograph with Tonight card, a four-cell wall, numeral cards and a four-line ruled how-it-works list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero hk-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero hk-hero--page"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hk-title__h"} -->
<p class="hk-title__h"><?php echo esc_html( hako_capsule_t( 'fl_showers' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p10-washroom-row.webp' ) ); ?>,"dimRatio":0,"isDark":false,"align":"full","className":"hk-stage hk-stage--page sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage hk-stage--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p10' ); ?>" src="<?php echo hako_capsule_img( 'p10-washroom-row.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"hk-tonight hk-tonight--compact","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight hk-tonight--compact"><!-- wp:group {"className":"hk-tonight__top","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__top"><!-- wp:paragraph {"className":"hk-eyebrow"} -->
<p class="hk-eyebrow"><span class="hk-dot"></span><?php echo esc_html( hako_capsule_t( 'tn_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-tag","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tag"><!-- wp:html -->
<?php echo hako_capsule_icon( 'tag' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tonight__rows","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__rows"><!-- wp:group {"className":"hk-tn","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tn"><!-- wp:paragraph {"className":"hk-tn__l"} -->
<p class="hk-tn__l"><?php echo esc_html( hako_capsule_t( 'tn_checkin_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-tn__v"} -->
<p class="hk-tn__v"><?php echo esc_html( hako_capsule_t( 'tn_checkin' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tn","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tn"><!-- wp:paragraph {"className":"hk-tn__l"} -->
<p class="hk-tn__l"><?php echo esc_html( hako_capsule_t( 'tn_shower_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-tn__v"} -->
<p class="hk-tn__v"><?php echo esc_html( hako_capsule_t( 'tn_shower' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-tonight__desk"} -->
<p class="hk-tonight__desk"><?php echo esc_html( hako_capsule_t( 'tn_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-tonight__btns","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tonight__btns"><!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><?php echo esc_html( hako_capsule_t( 'tn_see' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--fill"} -->
<p class="hk-pill hk-pill--fill"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><?php echo esc_html( hako_capsule_t( 'tn_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-lede hk-lede--page hk-lede--card","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede hk-lede--page hk-lede--card"><!-- wp:group {"className":"hk-in hk-lede__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-lede__in"><!-- wp:heading {"level":1,"className":"hk-h1 hk-h1--page"} -->
<h1 class="wp-block-heading hk-h1 hk-h1--page"><?php echo esc_html( hako_capsule_t( 'showers_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'showers_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--wallp","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--wallp"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'sh_b1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p03-wide-pod.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w5_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'shc1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'shc1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'shc1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'shc_aria1' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p06-shower-room.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip hk-chip--ink"} -->
<p class="hk-chip hk-chip--ink"><?php echo esc_html( hako_capsule_t( 'w5_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'shc2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'shc2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'shc2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'shc_aria2' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'shc3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'shc3_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'shc3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'shc3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'shc3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-box","layout":{"type":"default"}} -->
<div class="wp-block-group hk-box"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'shc4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'shc4_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'shc4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'shc4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'shc4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-box","layout":{"type":"default"}} -->
<div class="wp-block-group hk-box"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'showers_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'showers_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--minute","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--minute"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'sh_b2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:group {"className":"hk-cards hk-cards--page sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cards hk-cards--page sp-stagger"><!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p12-towel-shelf.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'shf1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m1"} -->
<p class="hk-badge hk-badge--m1"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'shf1_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'shf1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'shf1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p14-night-desk.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'shf2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m2"} -->
<p class="hk-badge hk-badge--m2"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'shf2_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'shf2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'shf2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p11-lockers.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'shf3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m3"} -->
<p class="hk-badge hk-badge--m3"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'shf3_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'shf3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'shf3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'sh_b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-in--steps","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-in--steps"><!-- wp:list {"ordered":true,"className":"hk-rulelist hk-rulelist--steps"} -->
<ol class="wp-block-list hk-rulelist hk-rulelist--steps">
<!-- wp:list-item -->
<li><span class="hk-no">01</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'shs1_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'shs1_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">02</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'shs2_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'shs2_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">03</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'shs3_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'shs3_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">04</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'shs4_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'shs4_p' ) ); ?></span></span></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'showers_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'showers_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hako-capsule/front-book"} /-->
