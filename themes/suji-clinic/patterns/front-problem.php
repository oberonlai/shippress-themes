<?php
/**
 * Title: Home: the problem
 * Slug: suji-clinic/front-problem
 * Categories: suji-clinic
 * Keywords: clinic, problem, narrative
 * Viewport Width: 1440
 * Description: A thin Latin title and a one-line label at the left, a 1 px vertical rule, then a heading and two paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-sec sj-problem","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-sec sj-problem"><!-- wp:group {"className":"sj-wrap sj-problem__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-problem__grid"><!-- wp:group {"className":"sj-problem__head","layout":{"type":"default"}} -->
<div class="wp-block-group sj-problem__head"><!-- wp:paragraph {"className":"sj-giant sj-giant--s"} -->
<p class="sj-giant sj-giant--s"><?php echo esc_html( suji_clinic_t( 'prob_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'prob_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-problem__body","layout":{"type":"default"}} -->
<div class="wp-block-group sj-problem__body"><!-- wp:heading {"className":"sj-h2"} -->
<h2 class="wp-block-heading sj-h2"><?php echo esc_html( suji_clinic_t( 'prob_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( suji_clinic_t( 'prob_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( suji_clinic_t( 'prob_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
