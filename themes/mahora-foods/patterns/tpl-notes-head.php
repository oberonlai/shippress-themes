<?php
/**
 * Title: Template: Notes head
 * Slug: mahora-foods/tpl-notes-head
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Inserter: no
 * Viewport Width: 1440
 * Description: Heading of the Notes (posts) page.
 */
?>
<!-- wp:group {"className": "mf-pagehead", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-pagehead"><!-- wp:heading {"level": 1, "className": "mf-h1 mf-h1--inner"} -->
<h1 class="wp-block-heading mf-h1 mf-h1--inner"><?php echo esc_html( mahora_foods_t( 'notes_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script"} -->
<p class="mf-script"><?php echo esc_html( mahora_foods_t( 'notes_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-lead"} -->
<p class="mf-lead"><?php echo esc_html( mahora_foods_t( 'notes_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
