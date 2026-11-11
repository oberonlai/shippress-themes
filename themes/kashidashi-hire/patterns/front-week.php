<?php
/**
 * Title: Home: hire week
 * Slug: kashidashi-hire/front-week
 * Categories: kashidashi-hire
 * Description: Horizontal strip of five day panels, Monday to Friday.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"week","align":"full","className":"kh-sec kh-week","layout":{"type":"default"}} -->
<section id="week" class="wp-block-group alignfull kh-sec kh-week"><!-- wp:group {"className":"kh-week__head","layout":{"type":"default"}} -->
<div class="wp-block-group kh-week__head"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'wk_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-week__title"} -->
<h2 class="wp-block-heading kh-week__title"><?php echo esc_html( kashidashi_hire_t( 'wk_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-week__strip sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-week__strip sp-stagger"><!-- wp:group {"className":"kh-day sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-day sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-day__n"} -->
<p class="kh-day__n">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-day__t"} -->
<h3 class="wp-block-heading kh-day__t"><?php echo esc_html( kashidashi_hire_t( 'wk_d1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-day__p"} -->
<p class="kh-day__p"><?php echo esc_html( kashidashi_hire_t( 'wk_d1t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-day sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-day sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-day__n"} -->
<p class="kh-day__n">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-day__t"} -->
<h3 class="wp-block-heading kh-day__t"><?php echo esc_html( kashidashi_hire_t( 'wk_d2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-day__p"} -->
<p class="kh-day__p"><?php echo esc_html( kashidashi_hire_t( 'wk_d2t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-day sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-day sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-day__n"} -->
<p class="kh-day__n">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-day__t"} -->
<h3 class="wp-block-heading kh-day__t"><?php echo esc_html( kashidashi_hire_t( 'wk_d3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-day__p"} -->
<p class="kh-day__p"><?php echo esc_html( kashidashi_hire_t( 'wk_d3t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-day sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-day sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-day__n"} -->
<p class="kh-day__n">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-day__t"} -->
<h3 class="wp-block-heading kh-day__t"><?php echo esc_html( kashidashi_hire_t( 'wk_d4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-day__p"} -->
<p class="kh-day__p"><?php echo esc_html( kashidashi_hire_t( 'wk_d4t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-day sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-day sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-day__n"} -->
<p class="kh-day__n">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kh-day__t"} -->
<h3 class="wp-block-heading kh-day__t"><?php echo esc_html( kashidashi_hire_t( 'wk_d5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-day__p"} -->
<p class="kh-day__p"><?php echo esc_html( kashidashi_hire_t( 'wk_d5t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kh-btn-wrap"} -->
<div class="wp-block-buttons kh-btn-wrap"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( kashidashi_hire_t( 'wk_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
