<?php
/**
 * Title: Engineers: page head
 * Slug: hagane-machinery/advisers-head
 * Categories: hagane-machinery
 * Keywords: team, engineers
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the four engineers.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-head"><!-- wp:group {"align":"wide","className":"hm-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-head__grid"><!-- wp:group {"className":"hm-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-head__title"} -->
<h1 class="wp-block-heading hm-head__title"><?php echo wp_kses_post( hagane_machinery_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
