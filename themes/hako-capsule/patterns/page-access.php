<?php
/**
 * Title: Page: Access
 * Slug: hako-capsule/page-access
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: Access page: head photograph with Tonight card, four ruled walking lines beside a line map, numeral cards, address and hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero hk-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero hk-hero--page"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hk-title__h"} -->
<p class="hk-title__h"><?php echo esc_html( hako_capsule_t( 'fl_access' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p15-walkway.webp' ) ); ?>,"dimRatio":0,"isDark":false,"align":"full","className":"hk-stage hk-stage--page sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage hk-stage--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p15' ); ?>" src="<?php echo hako_capsule_img( 'p15-walkway.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
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
<h1 class="wp-block-heading hk-h1 hk-h1--page"><?php echo esc_html( hako_capsule_t( 'access_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'access_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ac_b1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-access","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-access"><!-- wp:group {"className":"hk-access__steps sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-access__steps sp-reveal sp-reveal--up"><!-- wp:list {"ordered":true,"className":"hk-rulelist hk-rulelist--steps"} -->
<ol class="wp-block-list hk-rulelist hk-rulelist--steps">
<!-- wp:list-item -->
<li><span class="hk-no">01</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'acs1_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'acs1_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">02</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'acs2_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'acs2_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">03</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'acs3_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'acs3_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">04</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'acs4_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'acs4_p' ) ); ?></span></span></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-access__map","layout":{"type":"default"}} -->
<div class="wp-block-group hk-access__map"><!-- wp:html -->
<svg class="hk-map" viewBox="0 0 560 320" role="img" aria-label="<?php echo hako_capsule_a( 'map_aria' ); ?>" fill="none" stroke="currentColor" stroke-width="1"><rect x="24" y="40" width="150" height="110"/><path d="M24 95h150" stroke-dasharray="4 4"/><path d="M174 150h120v70h140" stroke-width="1.5"/><path d="M174 160h110v70h150" stroke-dasharray="2 5"/><circle cx="174" cy="150" r="6" fill="currentColor"/><rect x="434" y="170" width="100" height="90"/><rect x="456" y="196" width="20" height="20" fill="#AFAFB0"/><path d="M30 280h500" stroke-dasharray="1 6"/><g stroke="none" fill="currentColor" font-family="Inter Tight, Arial, sans-serif" font-size="13" letter-spacing="1.2"><text x="36" y="72"><?php echo esc_html( hako_capsule_t( 'map_station' ) ); ?></text><text x="150" y="140" text-anchor="end"><?php echo esc_html( hako_capsule_t( 'map_exit' ) ); ?></text><text x="300" y="205"><?php echo esc_html( hako_capsule_t( 'map_dist' ) ); ?></text><text x="484" y="288" text-anchor="middle"><?php echo esc_html( hako_capsule_t( 'map_hako' ) ); ?></text></g></svg>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ac_b2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'access_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'access_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--minute","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--minute"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ac_b4' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:group {"className":"hk-cards hk-cards--page sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cards hk-cards--page sp-stagger"><!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p07-station-street.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'acc1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m1"} -->
<p class="hk-badge hk-badge--m1"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'acc1_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'acc1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'acc1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p01-key-handover.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'acc2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m2"} -->
<p class="hk-badge hk-badge--m2"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'acc2_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'acc2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'acc2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo hako_capsule_img( 'p09-front-desk.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-notch","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch"><!-- wp:paragraph {"className":"hk-notch__n"} -->
<p class="hk-notch__n"><?php echo esc_html( hako_capsule_t( 'acc3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-notch__r","layout":{"type":"default"}} -->
<div class="wp-block-group hk-notch__r"><!-- wp:paragraph {"className":"hk-badge hk-badge--m3"} -->
<p class="hk-badge hk-badge--m3"><span class="hk-badge__i"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-notch__u"} -->
<p class="hk-notch__u"><?php echo esc_html( hako_capsule_t( 'acc3_u' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hk-card__t"} -->
<h3 class="wp-block-heading hk-card__t"><?php echo esc_html( hako_capsule_t( 'acc3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-card__p"} -->
<p class="hk-card__p"><?php echo esc_html( hako_capsule_t( 'acc3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ac_b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-in--kv","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-in--kv"><!-- wp:list {"className":"hk-kv hk-kv--wide"} -->
<ul class="wp-block-list hk-kv hk-kv--wide">
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_addr' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_addr_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_desk' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_desk_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_in' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_in_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_out' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_out_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_day' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_day_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_sh' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_sh_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_lug' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_lug_v' ) ); ?></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-k"><?php echo esc_html( hako_capsule_t( 'kv_mail' ) ); ?></span><span class="hk-v"><?php echo esc_html( hako_capsule_t( 'kv_mail_v' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'access_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'access_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hako-capsule/front-book"} /-->
