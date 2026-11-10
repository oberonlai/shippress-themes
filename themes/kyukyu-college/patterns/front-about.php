<?php
/**
 * Title: Home: about row (giant word + statement)
 * Slug: kyukyu-college/front-about
 * Categories: kyukyu-college
 * Keywords: front-about
 * Viewport Width: 1440
 * Description: Hairline split row: ABOUT with a red subtitle at the left, statement and two paragraphs at the right.
 */
?>
<!-- wp:group {"tagName": "section", "anchor": "about", "className": "kk-wrap kk-sec kk-split kk-about", "layout": {"type": "default"}} -->
<section id="about" class="wp-block-group kk-wrap kk-sec kk-split kk-about"><!-- wp:group {"className": "kk-cell kk-cell--l sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-cell kk-cell--l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className": "kk-word"} -->
<p class="kk-word"><?php echo wp_kses_post( kyukyu_college_t( 'k33080c3d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-sub"} -->
<p class="kk-sub"><?php echo wp_kses_post( kyukyu_college_t( 'kc8e38dc1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-cell kk-cell--r sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-cell kk-cell--r sp-reveal sp-reveal--up"><!-- wp:heading {"level": 2, "className": "kk-statement"} -->
<h2 class="wp-block-heading kk-statement"><?php echo wp_kses_post( kyukyu_college_t( 'ke72c301e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kyukyu_college_t( 'k5753c195' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kyukyu_college_t( 'k1ac95afc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
