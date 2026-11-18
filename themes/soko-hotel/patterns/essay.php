<?php
/**
 * Title: Essay: vertical title over three columns
 * Slug: soko-hotel/essay
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: A vertical-set title centred above three equal serif text columns, with a caption and an author line.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-sec sk-essay","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-essay"><!-- wp:heading {"level":2,"className":"sk-essay__title"} -->
<h2 class="wp-block-heading sk-essay__title"><?php echo esc_html( soko_hotel_t( 'essay_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-cap"} -->
<p class="sk-cap"><?php echo esc_html( soko_hotel_t( 'essay_cap' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sk-essay__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-essay__cols sp-stagger"><!-- wp:group {"className":"sk-essay__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-essay__col sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'essay_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-essay__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-essay__col sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'essay_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-essay__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-essay__col sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'essay_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-essay__by"} -->
<p class="sk-essay__by"><?php echo esc_html( soko_hotel_t( 'essay_by' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
