<?php
/**
 * Title: Page: About
 * Slug: kirinuki-studio/page-about
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: About page: mist head with a chamfered triptych, the studio story, people and rules as rows, role chips and an inside-the-studio tile band.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_about' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_about_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 's1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'p1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_p1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w2.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w2' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_about_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_about_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"story","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_about_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_about_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"people","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="people" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_about_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_about_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"rules","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="rules" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_about_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_about_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--ruled","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--ruled"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroups kr-cgroups--one","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroups kr-cgroups--one"><!-- wp:group {"className":"kr-cgroup kr-cgroup--plum","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--plum"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_g1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_7' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--ochre","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--ochre"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_g2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_4' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--rose","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--rose"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_g3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_5' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/#people' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_ppl_6' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-band"><!-- wp:group {"className":"kr-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap"><!-- wp:group {"className":"kr-band__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-band__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title kr-title--dark","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title kr-title--dark"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_inside_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_inside_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-tiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tiles sp-stagger"><!-- wp:group {"className":"kr-tile kr-tile--w1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--w1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'b1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-tile__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__cap"><!-- wp:paragraph {"className":"kr-tile__client"} -->
<p class="kr-tile__client"><?php echo esc_html( kirinuki_studio_t( 'i_inside_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-tile__line"} -->
<p class="kr-tile__line"><?php echo esc_html( kirinuki_studio_t( 'i_inside_l1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-tile kr-tile--w2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--w2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'd1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_d1' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-tile kr-tile--w6 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--w6 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'w6.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w6' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-tile__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__cap"><!-- wp:paragraph {"className":"kr-tile__client"} -->
<p class="kr-tile__client"><?php echo esc_html( kirinuki_studio_t( 'i_inside_c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-tile__line"} -->
<p class="kr-tile__line"><?php echo esc_html( kirinuki_studio_t( 'i_inside_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group kr-band__foot"><!-- wp:buttons {"className":"kr-btns"} -->
<div class="wp-block-buttons kr-btns"><!-- wp:button {"className":"kr-pill kr-pill--light"} -->
<div class="wp-block-button kr-pill kr-pill--light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
