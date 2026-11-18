<?php
/**
 * Title: The stay: what is included and the rates
 * Slug: ashiato-hotel/the-stay
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: What every stay includes as a ruled two-column list, beside the welcome kit photograph, and the full rates table.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-stay","anchor":"includes","layout":{"type":"default"}} -->
<section id="includes" class="wp-block-group ah-sec ah-stay"><!-- wp:group {"className":"ah-stay__top","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stay__top"><!-- wp:group {"className":"ah-stay__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stay__media sp-reveal sp-reveal--up"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ah-stay__img"} -->
<figure class="wp-block-image size-full ah-stay__img"><img src="<?php echo ashiato_hotel_img( 'welcome-kit.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p11' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-stay__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stay__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 'stay_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"ah-incl"} -->
<ul class="wp-block-list ah-incl"><!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc3' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc4' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc5' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc6' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc7' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html( ashiato_hotel_t( 'inc8' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-stay__rates","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stay__rates"><!-- wp:heading {"level":3,"className":"ah-label ah-rates__h"} -->
<h3 class="wp-block-heading ah-label ah-rates__h"><?php echo esc_html( ashiato_hotel_t( 'rates_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"ah-rates"} -->
<figure class="wp-block-table ah-rates"><table><thead><tr><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_item' ) ); ?></th><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_detail' ) ); ?></th><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate0_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate0_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate0_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate1_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate1_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate2_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate2_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate3_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate3_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate4_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate4_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate5_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate5_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate6_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate6_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ah-note"} -->
<p class="ah-note"><?php echo esc_html( ashiato_hotel_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_room_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
