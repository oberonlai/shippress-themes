<?php
/**
 * Title: People: page head
 * Slug: minato-business-hotel/advisers-head
 * Categories: minato-business-hotel
 * Keywords: team, staff
 * Viewport Width: 1440
 * Description: Title and a short paragraph about the four people.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-head"><!-- wp:group {"align":"wide","className":"mb-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-head__grid"><!-- wp:group {"className":"mb-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'home_advisers_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-head__title"} -->
<h1 class="wp-block-heading mb-head__title"><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
