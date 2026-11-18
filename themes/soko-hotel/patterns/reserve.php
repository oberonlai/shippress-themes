<?php
/**
 * Title: Reserve: the one way
 * Slug: soko-hotel/reserve
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: A centred 1px outline box with the three steps, the hours line, an outline mailto button and a link to the reserve page.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-sec sk-reserve","anchor":"reserve","layout":{"type":"default"}} -->
<section id="reserve" class="wp-block-group sk-sec sk-reserve"><!-- wp:group {"className":"sk-box","layout":{"type":"default"}} -->
<div class="wp-block-group sk-box"><!-- wp:heading {"level":2,"className":"sk-box__h"} -->
<h2 class="wp-block-heading sk-box__h"><?php echo esc_html( soko_hotel_t( 'reserve_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"className":"sk-steps"} -->
<ol class="wp-block-list sk-steps"><!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'reserve_s1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'reserve_s2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'reserve_s3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"sk-box__line"} -->
<p class="sk-box__line"><?php echo esc_html( soko_hotel_t( 'reserve_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sk-box__btns"} -->
<div class="wp-block-buttons sk-box__btns"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@sokohotel.example?subject=' . rawurlencode( soko_hotel_t( 'reserve_subject' ) ) ); ?>"><?php echo esc_html( soko_hotel_t( 'reserve_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sk-more sk-more--center"} -->
<p class="sk-more sk-more--center"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'reserve_page' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
