<?php
/**
 * Title: Page: Pods and cabins
 * Slug: hako-capsule/page-pods
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pods page: parallax head with Tonight card, four-cell numeral wall, four 50/50 rows with spec lists and foot strips.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero hk-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero hk-hero--page"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hk-title__h"} -->
<p class="hk-title__h"><?php echo esc_html( hako_capsule_t( 'fl_pods' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p08-pod-hall.webp' ) ); ?>,"dimRatio":0,"isDark":false,"align":"full","className":"hk-stage hk-stage--page sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage hk-stage--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p08' ); ?>" src="<?php echo hako_capsule_img( 'p08-pod-hall.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
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
<h1 class="wp-block-heading hk-h1 hk-h1--page"><?php echo esc_html( hako_capsule_t( 'pods_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'pods_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--wallp","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--wallp"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'pd_b1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-wall hk-wall--grid hk-wall--n4 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'pdn1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w1_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w1_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w1_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pdw_aria1' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'pdn2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w2_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w2_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w2_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pdw_aria2' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'pdn3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w3_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w3_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w3_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pdw_aria3' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-cell__num"} -->
<p class="hk-cell__num"><?php echo esc_html( hako_capsule_t( 'pdn4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w4_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w4_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w4_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pdw_aria4' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prows","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prows"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'pd_b2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow"><!-- wp:group {"className":"hk-rules__row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-rules__photo"} -->
<figure class="wp-block-image size-full hk-rules__photo"><img src="<?php echo hako_capsule_img( 'p02-standard-pod.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-rules__list","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__list"><!-- wp:group {"className":"hk-prow__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow__body sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w1_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-prow__t"} -->
<h3 class="wp-block-heading hk-prow__t"><?php echo esc_html( hako_capsule_t( 'w1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prow__p"} -->
<p class="hk-prow__p"><?php echo esc_html( hako_capsule_t( 'pdd1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hk-kv hk-kv--spec"} -->
<ul class="wp-block-list hk-kv hk-kv--spec">
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_size' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_size_std' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_door' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_door_curtain' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_locker' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_locker_own' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_power' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_power' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot"><!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--price"} -->
<p class="hk-rules__cell hk-rules__cell--price"><?php echo esc_html( hako_capsule_t( 'w1_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'pdcount1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pd_book' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow"><!-- wp:group {"className":"hk-rules__row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-rules__photo"} -->
<figure class="wp-block-image size-full hk-rules__photo"><img src="<?php echo hako_capsule_img( 'p03-wide-pod.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-rules__list","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__list"><!-- wp:group {"className":"hk-prow__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow__body sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w2_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-prow__t"} -->
<h3 class="wp-block-heading hk-prow__t"><?php echo esc_html( hako_capsule_t( 'w2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prow__p"} -->
<p class="hk-prow__p"><?php echo esc_html( hako_capsule_t( 'pdd2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hk-kv hk-kv--spec"} -->
<ul class="wp-block-list hk-kv hk-kv--spec">
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_size' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_size_wide' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_door' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_door_curtain' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_locker' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_locker_own' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_power' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_power' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot"><!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--price"} -->
<p class="hk-rules__cell hk-rules__cell--price"><?php echo esc_html( hako_capsule_t( 'w2_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'pdcount2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pd_book' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow"><!-- wp:group {"className":"hk-rules__row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-rules__photo"} -->
<figure class="wp-block-image size-full hk-rules__photo"><img src="<?php echo hako_capsule_img( 'p04-quiet-floor.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-rules__list","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__list"><!-- wp:group {"className":"hk-prow__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow__body sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w3_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-prow__t"} -->
<h3 class="wp-block-heading hk-prow__t"><?php echo esc_html( hako_capsule_t( 'w3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prow__p"} -->
<p class="hk-prow__p"><?php echo esc_html( hako_capsule_t( 'pdd3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hk-kv hk-kv--spec"} -->
<ul class="wp-block-list hk-kv hk-kv--spec">
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_size' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_size_std' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_door' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_door_curtain' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_locker' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_locker_own' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_power' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_power' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot"><!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--price"} -->
<p class="hk-rules__cell hk-rules__cell--price"><?php echo esc_html( hako_capsule_t( 'w3_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'pdcount3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pd_book' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow"><!-- wp:group {"className":"hk-rules__row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-rules__photo"} -->
<figure class="wp-block-image size-full hk-rules__photo"><img src="<?php echo hako_capsule_img( 'p05-single-cabin.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-rules__list","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__list"><!-- wp:group {"className":"hk-prow__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prow__body sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w4_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-prow__t"} -->
<h3 class="wp-block-heading hk-prow__t"><?php echo esc_html( hako_capsule_t( 'w4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prow__p"} -->
<p class="hk-prow__p"><?php echo esc_html( hako_capsule_t( 'pdd4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hk-kv hk-kv--spec"} -->
<ul class="wp-block-list hk-kv hk-kv--spec">
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_size' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_size_cabin' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_door' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_door_lock' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_locker' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_locker_own' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'cmp_h_power' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'cmp_power' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot"><!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--price"} -->
<p class="hk-rules__cell hk-rules__cell--price"><?php echo esc_html( hako_capsule_t( 'w4_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'pdcount4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'pd_book' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'pd_b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'pods_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'pods_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'pods_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'pods_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hako-capsule/front-book"} /-->
