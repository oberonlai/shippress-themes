<?php
/**
 * Title: Home: About row with hairline
 * Slug: hibana-college/front-about
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: ABOUT caps heading with hairline, two paragraphs at an offset, two round arrows.
 */
?>
<!-- wp:group {"className":"hc-sec hc-about","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-about">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-head sp-reveal sp-reveal--up hc-head--big","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head sp-reveal sp-reveal--up hc-head--big">
<!-- wp:group {"className":"hc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head__main">
<!-- wp:heading {"level":2,"className":"hc-head__title"} -->
<h2 class="wp-block-heading hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'about_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-head__sub"} -->
<p class="hc-head__sub"><?php echo wp_kses_post( hibana_college_t( 'about_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hc-hairline "} -->
<hr class="wp-block-separator has-alpha-channel-opacity hc-hairline"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-about__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-about__body sp-reveal sp-reveal--up">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-about__links","layout":{"type":"default"}} -->
<div class="wp-block-group hc-about__links">
<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/about/"><?php echo wp_kses_post( hibana_college_t( 'about_l1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/workshop-and-safety/"><?php echo wp_kses_post( hibana_college_t( 'about_l2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
