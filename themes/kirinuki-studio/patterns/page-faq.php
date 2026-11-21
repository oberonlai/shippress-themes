<?php
/**
 * Title: Page: FAQ
 * Slug: kirinuki-studio/page-faq
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: FAQ page: topic chips on a ruled sheet that jump to four groups of question rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_faq' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_faq_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_faq_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 's1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w5.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w5' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'c3.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_c3' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--ruled","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--ruled"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_faqt_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_faqt_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroups","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroups"><!-- wp:group {"className":"kr-cgroup kr-cgroup--plum","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--plum"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_booking' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-booking' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_1' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-booking' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_5' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-booking' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_6' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--ochre","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--ochre"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_day' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-day' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_2' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-day' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_3' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--rose","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--rose"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_files' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-files' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_4' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-files' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_7' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cgroup kr-cgroup--green","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cgroup kr-cgroup--green"><!-- wp:paragraph {"className":"kr-gh"} -->
<p class="kr-gh"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_payment' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kr-chips"} -->
<ul class="wp-block-list kr-chips"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/faq/#faq-payment' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'i_faqc_8' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"anchor":"faq-booking","className":"kr-faqgroup","layout":{"type":"default"}} -->
<div id="faq-booking" class="wp-block-group kr-faqgroup"><!-- wp:paragraph {"className":"kr-gh kr-faqgroup__h kr-cgroup--plum"} -->
<p class="kr-gh kr-faqgroup__h kr-cgroup--plum"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_booking' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-faq__list","layout":{"type":"default"}} -->
<div class="wp-block-group kr-faq__list"><!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q1' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q5' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a5' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q6' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a6' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"faq-day","className":"kr-faqgroup","layout":{"type":"default"}} -->
<div id="faq-day" class="wp-block-group kr-faqgroup"><!-- wp:paragraph {"className":"kr-gh kr-faqgroup__h kr-cgroup--ochre"} -->
<p class="kr-gh kr-faqgroup__h kr-cgroup--ochre"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_day' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-faq__list","layout":{"type":"default"}} -->
<div class="wp-block-group kr-faq__list"><!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q2' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q3' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"faq-files","className":"kr-faqgroup","layout":{"type":"default"}} -->
<div id="faq-files" class="wp-block-group kr-faqgroup"><!-- wp:paragraph {"className":"kr-gh kr-faqgroup__h kr-cgroup--rose"} -->
<p class="kr-gh kr-faqgroup__h kr-cgroup--rose"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_files' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-faq__list","layout":{"type":"default"}} -->
<div class="wp-block-group kr-faq__list"><!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q4' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a4' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q7' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a7' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"faq-payment","className":"kr-faqgroup","layout":{"type":"default"}} -->
<div id="faq-payment" class="wp-block-group kr-faqgroup"><!-- wp:paragraph {"className":"kr-gh kr-faqgroup__h kr-cgroup--green"} -->
<p class="kr-gh kr-faqgroup__h kr-cgroup--green"><?php echo esc_html( kirinuki_studio_t( 'i_faqg_payment' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-faq__list","layout":{"type":"default"}} -->
<div class="wp-block-group kr-faq__list"><!-- wp:details {"className":"kr-qa"} -->
<details class="wp-block-details kr-qa"><summary><?php echo esc_html( kirinuki_studio_t( 'i_faq_q8' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kirinuki_studio_t( 'i_faq_a8' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
