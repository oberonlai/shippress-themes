<?php
/**
 * Title: Doctors and nurses: page head
 * Slug: sukoyaka-family-clinic/advisers-head
 * Categories: sukoyaka-family-clinic
 * Keywords: team, doctors, nurses
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the four people most patients meet first.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head"><!-- wp:group {"align":"wide","className":"sf-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-head__grid"><!-- wp:group {"className":"sf-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-head__title"} -->
<h1 class="wp-block-heading sf-head__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
