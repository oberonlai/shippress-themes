<?php
/**
 * Title: Advisers: page head
 * Slug: kasumi-mortgage/advisers-head
 * Categories: kasumi-mortgage
 * Keywords: instructors
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the four people.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-head"><!-- wp:group {"align":"wide","className":"km-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-head__grid"><!-- wp:group {"className":"km-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-head__title"} -->
<h1 class="wp-block-heading km-head__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
