<?php
/**
 * Title: Page: About
 * Slug: hako-capsule/page-about
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: About page: parallax head, story, four building cells, founding numerals and standards of care.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero hk-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero hk-hero--page"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hk-title__h"} -->
<p class="hk-title__h"><?php echo esc_html( hako_capsule_t( 'fl_about' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p13-lounge.webp' ) ); ?>,"dimRatio":0,"isDark":false,"align":"full","className":"hk-stage hk-stage--page sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage hk-stage--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p13' ); ?>" src="<?php echo hako_capsule_img( 'p13-lounge.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-lede hk-lede--page","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede hk-lede--page"><!-- wp:group {"className":"hk-in hk-lede__in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-lede__in"><!-- wp:heading {"level":1,"className":"hk-h1 hk-h1--page"} -->
<h1 class="wp-block-heading hk-h1 hk-h1--page"><?php echo esc_html( hako_capsule_t( 'about_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'about_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><?php echo esc_html( hako_capsule_t( 'ab_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ab_b1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'about_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'about_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--wallp","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--wallp"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ab_b2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'abc1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'abc1_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'abc1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'abc1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'abc1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/access/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'abc_aria1' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'abc2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'abc2_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'abc2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'abc2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'abc2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'abc_aria2' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'abc3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'abc3_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'abc3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'abc3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'abc3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/showers/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'abc_aria3' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'abc4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'abc4_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'abc4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'abc4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'abc4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/house-rules/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'abc_aria4' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'about_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'about_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--minute","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--minute"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ab_b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:group {"className":"hk-cards hk-cards--page sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cards hk-cards--page sp-stagger"><!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p07-station-street.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch hk-notch--w","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch hk-notch--w"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'abf1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m1"} -->
<p class="hk-badge hk-badge--m1"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'abf1_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'abf1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'abf1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p08-pod-hall.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch hk-notch--w","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch hk-notch--w"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'abf2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m2"} -->
<p class="hk-badge hk-badge--m2"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'abf2_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'abf2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'abf2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p06-shower-room.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch hk-notch--w","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch hk-notch--w"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'abf3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m3"} -->
<p class="hk-badge hk-badge--m3"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'abf3_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'abf3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'abf3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ab_b4' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'about_s3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'about_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hako-capsule/front-book"} /-->
