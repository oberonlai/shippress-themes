<?php
/**
 * Title: Home: one day, a routine
 * Slug: nagare-workation/front-day
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Band with one portrait photograph at the left and three short paragraphs of a day at the lake at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--band nw-day","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--band nw-day"><!-- wp:group {"className":"nw-day__cols","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__cols"><!-- wp:group {"className":"nw-day__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p14-host-lamps.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-day__txt","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__txt"><!-- wp:group {"className":"nw-open sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'day_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label"><?php echo esc_html( nagare_workation_t( 'day_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-day__part","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__part"><!-- wp:paragraph {"className":"nw-day__when"} -->
<p class="nw-day__when"><?php echo esc_html( nagare_workation_t( 'day1_when' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'day1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-day__part","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__part"><!-- wp:paragraph {"className":"nw-day__when"} -->
<p class="nw-day__when"><?php echo esc_html( nagare_workation_t( 'day2_when' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'day2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-day__part","layout":{"type":"default"}} -->
<div class="wp-block-group nw-day__part"><!-- wp:paragraph {"className":"nw-day__when"} -->
<p class="nw-day__when"><?php echo esc_html( nagare_workation_t( 'day3_when' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'day3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
