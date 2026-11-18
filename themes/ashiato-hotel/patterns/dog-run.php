<?php
/**
 * Title: Dog run: inset parallax window
 * Slug: ashiato-hotel/dog-run
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: An inset rounded window with a slow parallax photograph of the dog run and a white card.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-runwrap","layout":{"type":"default"}} -->
<section class="wp-block-group ah-runwrap"><!-- wp:cover {"url":"<?php echo ashiato_hotel_img( 'dog-run-wide.webp' ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","isDark":false,"alt":"<?php echo ashiato_hotel_a( 'alt_p10' ); ?>","className":"ah-run sp-parallax"} -->
<div class="wp-block-cover is-light ah-run sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo ashiato_hotel_a( 'alt_p10' ); ?>" src="<?php echo ashiato_hotel_img( 'dog-run-wide.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ah-run__card","layout":{"type":"default"}} -->
<div class="wp-block-group ah-run__card"><!-- wp:paragraph {"className":"ah-label"} -->
<p class="ah-label"><?php echo esc_html( ashiato_hotel_t( 'run_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ah-run__h"} -->
<h2 class="wp-block-heading ah-run__h"><?php echo esc_html( ashiato_hotel_t( 'run_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'run_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<div class="ah-trail ah-trail--dr sp-stagger" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
