<?php
/**
 * Title: Home: welcome
 * Slug: mahora-foods/front-welcome
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Centred head and two paragraphs.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mf-sec mf-welcome", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mf-sec mf-welcome"><!-- wp:group {"className": "mf-sechead sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sechead sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign": "center", "className": "mf-h2"} -->
<h2 class="wp-block-heading has-text-align-center mf-h2"><?php echo esc_html( mahora_foods_t( 'w_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script", "align": "center"} -->
<p class="has-text-align-center mf-script"><?php echo esc_html( mahora_foods_t( 'w_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-lead", "align": "center"} -->
<p class="has-text-align-center mf-lead"><?php echo esc_html( mahora_foods_t( 'w_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-welcome__body", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-welcome__body"><!-- wp:paragraph {"className": "sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( mahora_foods_t( 'w_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( mahora_foods_t( 'w_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
