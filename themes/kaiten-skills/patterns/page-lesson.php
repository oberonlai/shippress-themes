<?php
/**
 * Title: Lesson player
 * Slug: kaiten-skills/page-lesson
 * Categories: kaiten-skills
 * Inserter: no
 * Viewport Width: 1440
 * Description: Lesson page with the hand-cut video frame, the lesson list panel, a notes area and the Next lesson leaf.
 */
?>
<!-- wp:group {"className":"ks-pagehead ks-pagehead--plain","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-pagehead ks-pagehead--plain"><!-- wp:group {"className":"ks-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'kaa762470' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-h1 ks-h1--page"} -->
<h1 class="wp-block-heading ks-h1 ks-h1--page"><?php echo wp_kses_post( kaiten_skills_t( 'kc88f4d83' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-phead__lead"} -->
<p class="ks-phead__lead"><?php echo wp_kses_post( kaiten_skills_t( 'k087f10b8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-lesson","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-lesson"><!-- wp:group {"className":"ks-wrap ks-lesson__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-lesson__grid"><!-- wp:group {"className":"ks-ll","layout":{"type":"default"}} -->
<div class="wp-block-group ks-ll"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'kf34961e3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:details {"className":"ks-ll__d","showContent":true} -->
<details class="wp-block-details ks-ll__d" open><summary><?php echo wp_kses_post( kaiten_skills_t( 'kaee676a4' ) ); ?></summary><!-- wp:html -->
<ol class="ks-ll__list"><li class="is-current"><span class="ks-ll__n">1</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'k1fded4f1' ) ); ?></span><span class="ks-ll__d"><?php echo wp_kses_post( kaiten_skills_t( 'kd085c063' ) ); ?></span></li><li><span class="ks-ll__n">2</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'k1c4ec5a1' ) ); ?></span><span class="ks-ll__d">11:15</span></li><li><span class="ks-ll__n">3</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'k178105b3' ) ); ?></span><span class="ks-ll__d">08:50</span></li><li><span class="ks-ll__n">4</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'kf0a9f99a' ) ); ?></span><span class="ks-ll__d">12:30</span></li><li><span class="ks-ll__n">5</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'ka5a7a519' ) ); ?></span><span class="ks-ll__d">10:05</span></li><li><span class="ks-ll__n">6</span><span class="ks-ll__t"><?php echo wp_kses_post( kaiten_skills_t( 'k7326014f' ) ); ?></span><span class="ks-ll__d">13:20</span></li></ol>
<!-- /wp:html --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-player","layout":{"type":"default"}} -->
<div class="wp-block-group ks-player"><!-- wp:group {"className":"ks-cut ks-cut--player","layout":{"type":"default"}} -->
<div class="wp-block-group ks-cut ks-cut--player"><!-- wp:html -->
<div class="ks-player__v"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-tutors.webp' ) ); ?>" alt="<?php echo esc_attr( kaiten_skills_t( 'aa2625130' ) ); ?>"/><span class="ks-player__play" aria-hidden="true"></span><span class="ks-player__time">09:40</span></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-h2 ks-player__t"} -->
<h2 class="wp-block-heading ks-h2 ks-player__t"><?php echo wp_kses_post( kaiten_skills_t( 'kb1397d18' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-player__m"} -->
<p class="ks-player__m"><?php echo wp_kses_post( kaiten_skills_t( 'kde54018e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ks-notes" action="#" onsubmit="return false"><label for="ks-notes"><?php echo wp_kses_post( kaiten_skills_t( 'kcc8fe8bd' ) ); ?></label><textarea id="ks-notes" rows="4" placeholder="<?php echo esc_attr( kaiten_skills_t( 'a1be96a47' ) ); ?>"></textarea></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-leaf ks-leaf--player"} -->
<p class="ks-leaf ks-leaf--player"><a href="/lesson/"><?php echo wp_kses_post( kaiten_skills_t( 'k820229a1' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-sec"><!-- wp:group {"className":"ks-wrap ks-sec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-sec__grid"><!-- wp:group {"className":"ks-sec__h","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__h"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'k636da1d3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo wp_kses_post( kaiten_skills_t( 'k7bc21275' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__b","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'kdcbf1a28' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k69cc1570' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k39d39966' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-sec"><!-- wp:group {"className":"ks-wrap ks-sec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-sec__grid"><!-- wp:group {"className":"ks-sec__h","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__h"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'k4547233b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo wp_kses_post( kaiten_skills_t( 'k6ed252a7' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__b","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'kc97829c8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k4ad22b24' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k0601bb70' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-sec"><!-- wp:group {"className":"ks-wrap ks-sec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-sec__grid"><!-- wp:group {"className":"ks-sec__h","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__h"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'kf4c6f851' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo wp_kses_post( kaiten_skills_t( 'kf4c6f851' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__b","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k2837b8d3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k4af248fe' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k65af6a4c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ks-sec"><!-- wp:group {"className":"ks-wrap ks-sec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wrap ks-sec__grid"><!-- wp:group {"className":"ks-sec__h","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__h"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kaiten_skills_t( 'k10ac3d04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo wp_kses_post( kaiten_skills_t( 'kcdf0255a' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__b","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'kcbdd08ba' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k06b51e54' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaiten_skills_t( 'k2aec76b5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
