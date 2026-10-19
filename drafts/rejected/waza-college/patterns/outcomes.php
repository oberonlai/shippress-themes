<?php
/**
 * Title: Home: outcomes
 * Slug: waza-college/outcomes
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: Three large figures (employment rate, qualification pass rate, partner employers) and a plain list of employer names.
 */
?>
<!-- wp:group {"tagName":"section","className":"wz-oc","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wz-oc"><!-- wp:paragraph {"className":"wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'oc_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'oc_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="wz-oc__figs"><div class="wz-oc__fig"><p class="wz-oc__n"><?php echo esc_html( waza_college_t( 'o1_n' ) ); ?></p><p class="wz-oc__l"><?php echo esc_html( waza_college_t( 'o1_l' ) ); ?></p></div><div class="wz-oc__fig"><p class="wz-oc__n"><?php echo esc_html( waza_college_t( 'o2_n' ) ); ?></p><p class="wz-oc__l"><?php echo esc_html( waza_college_t( 'o2_l' ) ); ?></p></div><div class="wz-oc__fig"><p class="wz-oc__n"><?php echo esc_html( waza_college_t( 'o3_n' ) ); ?></p><p class="wz-oc__l"><?php echo esc_html( waza_college_t( 'o3_l' ) ); ?></p></div></div><p class="wz-oc__list"><strong><?php echo esc_html( waza_college_t( 'oc_list_l' ) ); ?></strong> <?php echo esc_html( waza_college_t( 'oc_list' ) ); ?></p>
<!-- /wp:html --></section>
<!-- /wp:group -->
