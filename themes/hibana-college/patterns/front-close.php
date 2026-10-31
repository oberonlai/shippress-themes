<?php
/**
 * Title: Home: Open Bench close
 * Slug: hibana-college/front-close
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Caps heading row, address and hours, two round arrows.
 */
?>
<!-- wp:group {"className":"hc-sec hc-close","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-close">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head__main">
<!-- wp:heading {"level":2,"className":"hc-head__title"} -->
<h2 class="wp-block-heading hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'close_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-head__sub"} -->
<p class="hc-head__sub"><?php echo wp_kses_post( hibana_college_t( 'close_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-close__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-close__body sp-reveal sp-reveal--up">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'close_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-about__links","layout":{"type":"default"}} -->
<div class="wp-block-group hc-about__links">
<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/admissions/"><?php echo wp_kses_post( hibana_college_t( 'close_l1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/contact/"><?php echo wp_kses_post( hibana_college_t( 'close_l2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
