<?php
/**
 * Title: Template: journal intro
 * Slug: tana-furniture/tpl-journal-intro
 * Categories: tana-furniture
 * Inserter: no
 * Description: Introduction and two text columns under the journal cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-lead"} -->
<p class="tf-lead"><?php echo esc_html( tana_furniture_t( 'pg_jr_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","className":"tf-split"} -->
<div class="wp-block-columns alignwide tf-split"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tf-h3-lg"} -->
<h3 class="wp-block-heading tf-h3-lg"><?php echo esc_html( tana_furniture_t( 'pg_jr_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_jr_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tf-h3-lg"} -->
<h3 class="wp-block-heading tf-h3-lg"><?php echo esc_html( tana_furniture_t( 'pg_jr_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_jr_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
