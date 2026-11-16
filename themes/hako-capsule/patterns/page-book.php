<?php
/**
 * Title: Page: Book
 * Slug: hako-capsule/page-book
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: Book page: head photograph with Tonight card, four booking steps, the request form slot and a walk-in note with a foot strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero hk-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-hero hk-hero--page"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hk-title__h"} -->
<p class="hk-title__h"><?php echo esc_html( hako_capsule_t( 'fl_book' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stagewrap"><!-- wp:cover {"url":<?php echo wp_json_encode( hako_capsule_img( 'p09-front-desk.webp' ) ); ?>,"dimRatio":0,"isDark":false,"align":"full","className":"hk-stage hk-stage--page sp-parallax"} -->
<div class="wp-block-cover alignfull is-light hk-stage hk-stage--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo hako_capsule_a( 'alt_p09' ); ?>" src="<?php echo hako_capsule_img( 'p09-front-desk.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
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
<h1 class="wp-block-heading hk-h1 hk-h1--page"><?php echo esc_html( hako_capsule_t( 'book_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-lede__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lede__side"><!-- wp:paragraph {"className":"hk-lede__p"} -->
<p class="hk-lede__p"><?php echo esc_html( hako_capsule_t( 'book_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'bk_b1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-in--steps","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-in--steps"><!-- wp:list {"ordered":true,"className":"hk-rulelist hk-rulelist--steps"} -->
<ol class="wp-block-list hk-rulelist hk-rulelist--steps">
<!-- wp:list-item -->
<li><span class="hk-no">01</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'bks1_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'bks1_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">02</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'bks2_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'bks2_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">03</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'bks3_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'bks3_p' ) ); ?></span></span></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">04</span><span class="hk-li"><strong class="hk-li__t"><?php echo esc_html( hako_capsule_t( 'bks4_t' ) ); ?></strong><span class="hk-li__p"><?php echo esc_html( hako_capsule_t( 'bks4_p' ) ); ?></span></span></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'book_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'book_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--form","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--form"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'bk_b2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-in--form","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-in--form"><!-- wp:pattern {"slug":"hako-capsule/book-form"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--prose"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'bk_b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-prosewrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-prosewrap"><!-- wp:group {"className":"hk-prose sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-prose sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hk-prose__h"} -->
<h3 class="wp-block-heading hk-prose__h"><?php echo esc_html( hako_capsule_t( 'book_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-prose__p"} -->
<p class="hk-prose__p"><?php echo esc_html( hako_capsule_t( 'book_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot hk-rules__foot--book","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot hk-rules__foot--book"><!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'bkf_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'bkf_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'bkf_3' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
