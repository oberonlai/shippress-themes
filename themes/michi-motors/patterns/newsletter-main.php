<?php
/**
 * Title: Newsletter: main
 * Slug: michi-motors/newsletter-main
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Newsletter sign-up note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-sec ","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-sec "><!-- wp:group {"align":"wide","className":"mm-note-block","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-note-block"><!-- wp:group {"className":"mm-head","layout":{"type":"default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'newsletter_main_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'newsletter_main_2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'newsletter_main_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-body"} -->
<p class="mm-body"><?php echo esc_html( michi_motors_t( 'newsletter_main_4' ) ); ?> <a href="mailto:hello@michimotors.example"><?php echo esc_html( michi_motors_t( 'contact_main_11' ) ); ?></a> <?php echo esc_html( michi_motors_t( 'newsletter_main_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/journal/"><?php echo esc_html( michi_motors_t( 'newsletter_main_6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
