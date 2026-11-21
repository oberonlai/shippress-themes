<?php
/**
 * Title: Page: Day rates
 * Slug: kirinuki-studio/page-rates
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Day rates page: the seven included lines as chips on a ruled sheet, the full six-row price table that stays whole at every width, and notice and cancellation rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_rates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_rates_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_rates_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'r1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_r1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'h3.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w4.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w4' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--ruled","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--ruled"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_inc_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_inc_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroups kr-cgroups--one","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroups kr-cgroups--one"><!-- wp:group {"className":"kr-cgroup kr-cgroup--green","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--green"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_inc_g' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips kr-chips--wide"} -->
<ul class="wp-block-list kr-chips kr-chips--wide"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_3' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_4' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_5' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_6' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/rates/#table' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'inc_7' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kr-prow__p kr-prow__after"} -->
<p class="kr-prow__p kr-prow__after"><?php echo esc_html( kirinuki_studio_t( 'i_rates_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_tab_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_tab_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates"><!-- wp:group {"className":"kr-rates__row kr-rates__head","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row kr-rates__head"><!-- wp:paragraph {"className":"kr-rates__c"} -->
<p class="kr-rates__c"><?php echo esc_html( kirinuki_studio_t( 'rate_th1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c"} -->
<p class="kr-rates__c"><?php echo esc_html( kirinuki_studio_t( 'rate_th2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_th3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rates__row","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rates__row"><!-- wp:paragraph {"className":"kr-rates__c kr-rates__n"} -->
<p class="kr-rates__c kr-rates__n"><?php echo esc_html( kirinuki_studio_t( 'rate_n6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__d"} -->
<p class="kr-rates__c kr-rates__d"><?php echo esc_html( kirinuki_studio_t( 'rate_d6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-rates__c kr-rates__p"} -->
<p class="kr-rates__c kr-rates__p"><?php echo esc_html( kirinuki_studio_t( 'rate_p6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kr-note"} -->
<p class="kr-note"><?php echo esc_html( kirinuki_studio_t( 'rate_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"anchor":"table","className":"kr-prow","layout":{"type":"default"}} -->
<div id="table" class="wp-block-group kr-prow"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_rates_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_rates_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"anchor":"notice","className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="notice" class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_rates_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_rates_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-sheet__foot","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__foot"><!-- wp:buttons {"className":"kr-btns"} -->
<div class="wp-block-buttons kr-btns"><!-- wp:button {"className":"kr-pill kr-pill--dark"} -->
<div class="wp-block-button kr-pill kr-pill--dark"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
