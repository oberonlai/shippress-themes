<?php
/**
 * Title: Page: Shoots
 * Slug: kirinuki-studio/page-shoots
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Shoots page: chip sheet of the four kinds, a row of detail for each and a dark band of four chamfered tiles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_shoots' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'h2.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w3.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w5.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w5' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--ruled","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--ruled"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_kinds_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_kinds_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroups","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroups"><!-- wp:group {"className":"kr-cgroup kr-cgroup--plum","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--plum"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'kinds_pack_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#packshot' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_pack_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#packshot' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_pack_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#packshot' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_pack_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#packshot' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_pack_4' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#packshot' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_pack_5' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--ochre","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--ochre"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'kinds_life_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#lifestyle' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_life_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#lifestyle' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_life_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#lifestyle' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_life_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#lifestyle' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_life_4' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#lifestyle' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_life_5' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--rose","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--rose"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'kinds_flat_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#detail' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_flat_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#detail' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_flat_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#detail' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_flat_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#detail' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_flat_4' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--green","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--green"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'kinds_app_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#apparel' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_app_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#apparel' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_app_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#apparel' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_app_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#apparel' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_app_4' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shoots/#apparel' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'chip_app_5' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"anchor":"packshot","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="packshot" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-prow__link"} -->
<p class="kr-prow__link"><a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_link_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"lifestyle","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="lifestyle" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-prow__link"} -->
<p class="kr-prow__link"><a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_link_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"detail","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="detail" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-prow__link"} -->
<p class="kr-prow__link"><a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_link_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"apparel","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="apparel" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s4_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_shoots_s4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-prow__link"} -->
<p class="kr-prow__link"><a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_link_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-band"><!-- wp:group {"className":"kr-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap"><!-- wp:group {"className":"kr-band__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-band__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title kr-title--dark","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title kr-title--dark"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_kt_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_kt_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-tiles kr-tiles--six sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tiles kr-tiles--six sp-stagger"><!-- wp:group {"className":"kr-tile kr-tile--w1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--w1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'w1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-tile__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__cap"><!-- wp:paragraph {"className":"kr-tile__client"} -->
<p class="kr-tile__client"><?php echo esc_html( kirinuki_studio_t( 'i_kt_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-tile__line"} -->
<p class="kr-tile__line"><?php echo esc_html( kirinuki_studio_t( 'i_kt_l1' ) ); ?></p>
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

<!-- wp:group {"className":"kr-tile kr-tile--h sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--h sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'w4.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w4' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-tile__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__cap"><!-- wp:paragraph {"className":"kr-tile__client"} -->
<p class="kr-tile__client"><?php echo esc_html( kirinuki_studio_t( 'i_kt_c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-tile__line"} -->
<p class="kr-tile__line"><?php echo esc_html( kirinuki_studio_t( 'i_kt_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-tile kr-tile--h sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile kr-tile--h sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-tile__in kr-chamfer","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__in kr-chamfer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-fill"} -->
<figure class="wp-block-image size-full kr-fill"><img src="<?php echo kirinuki_studio_img( 'w6.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w6' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-tile__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-tile__cap"><!-- wp:paragraph {"className":"kr-tile__client"} -->
<p class="kr-tile__client"><?php echo esc_html( kirinuki_studio_t( 'i_kt_c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-tile__line"} -->
<p class="kr-tile__line"><?php echo esc_html( kirinuki_studio_t( 'i_kt_l3' ) ); ?></p>
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
