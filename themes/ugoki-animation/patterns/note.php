<?php
/**
 * Title: Home: studio note
 * Slug: ugoki-animation/note
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: Ledger grid with the rail label, the studio narrative and three facts as a credit stack.
 */
?>
<!-- wp:group {"tagName":"section","className":"ug-wrap ug-sec ug-note","layout":{"type":"default"}} -->
<section class="wp-block-group ug-wrap ug-sec ug-note"><!-- wp:group {"className":"ug-case__rail","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__rail"><!-- wp:paragraph {"className":"ug-label"} -->
<p class="ug-label"><?php echo esc_html( ugoki_animation_t( 'note_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-case__main","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__main"><!-- wp:heading {"level":2,"className":"ug-h2"} -->
<h2 class="wp-block-heading ug-h2"><?php echo esc_html( ugoki_animation_t( 'note_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ug-lead"} -->
<p class="ug-lead"><?php echo esc_html( ugoki_animation_t( 'note_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ugoki_animation_t( 'note_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-case__credits","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__credits"><!-- wp:group {"className":"ug-credit","layout":{"type":"default"}} -->
<div class="wp-block-group ug-credit"><!-- wp:paragraph {"className":"ug-credit__l"} -->
<p class="ug-credit__l">Founded</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ug-credit__v"} -->
<p class="ug-credit__v">2014</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-credit","layout":{"type":"default"}} -->
<div class="wp-block-group ug-credit"><!-- wp:paragraph {"className":"ug-credit__l"} -->
<p class="ug-credit__l">People</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ug-credit__v"} -->
<p class="ug-credit__v">8, at 8 light tables</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-credit","layout":{"type":"default"}} -->
<div class="wp-block-group ug-credit"><!-- wp:paragraph {"className":"ug-credit__l"} -->
<p class="ug-credit__l">In</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ug-credit__v"} -->
<p class="ug-credit__v">Port Arden, Canal Yard</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
