<?php
/**
 * Title: Consultants: page head
 * Slug: nami-staffing/advisers-head
 * Categories: nami-staffing
 * Keywords: consultants, team
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the consultants.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-head"><!-- wp:group {"align":"wide","className":"ns-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-head__grid"><!-- wp:group {"className":"ns-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ns-head__title"} -->
<h1 class="wp-block-heading ns-head__title"><?php echo wp_kses_post( nami_staffing_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( nami_staffing_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
