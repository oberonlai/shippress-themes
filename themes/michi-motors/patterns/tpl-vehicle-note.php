<?php
/**
 * Title: Vehicle note
 * Slug: michi-motors/tpl-vehicle-note
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Warranty line and test-drive ring.
 */
?>
<!-- wp:group {"className":"mm-vnote","layout":{"type":"default"}} -->
<div class="wp-block-group mm-vnote"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'tpl_vehicle_note_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-body"} -->
<p class="mm-body"><?php echo esc_html( michi_motors_t( 'tpl_vehicle_note_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/test-drive/"><?php echo esc_html( michi_motors_t( 'contact_head_2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
