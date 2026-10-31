<?php
/**
 * Title: Home: rates
 * Slug: mahora-foods/front-rates
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Six-line rate table, price column right, note below.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mf-sec mf-rates-sec", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mf-sec mf-rates-sec"><!-- wp:group {"className": "mf-sec__in", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sec__in"><!-- wp:group {"className": "mf-sechead sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sechead sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign": "center", "className": "mf-h2"} -->
<h2 class="wp-block-heading has-text-align-center mf-h2"><?php echo esc_html( mahora_foods_t( 'rt_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script", "align": "center"} -->
<p class="has-text-align-center mf-script"><?php echo esc_html( mahora_foods_t( 'rt_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-lead", "align": "center"} -->
<p class="has-text-align-center mf-lead"><?php echo esc_html( mahora_foods_t( 'rt_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"mf-rates"} -->
<figure class="wp-block-table mf-rates"><table><thead><tr><th><?php echo esc_html( mahora_foods_t( 'rt_h1' ) ); ?></th><th><?php echo esc_html( mahora_foods_t( 'rt_h2' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( mahora_foods_t( 'rt1_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt1_b' ) ); ?></td></tr><tr><td><?php echo esc_html( mahora_foods_t( 'rt2_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt2_b' ) ); ?></td></tr><tr><td><?php echo esc_html( mahora_foods_t( 'rt3_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt3_b' ) ); ?></td></tr><tr><td><?php echo esc_html( mahora_foods_t( 'rt4_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt4_b' ) ); ?></td></tr><tr><td><?php echo esc_html( mahora_foods_t( 'rt5_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt5_b' ) ); ?></td></tr><tr><td><?php echo esc_html( mahora_foods_t( 'rt6_a' ) ); ?></td><td><?php echo esc_html( mahora_foods_t( 'rt6_b' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className": "mf-note"} -->
<p class="mf-note"><?php echo esc_html( mahora_foods_t( 'rt_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
