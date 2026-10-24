<?php
/**
 * Title: Footer
 * Slug: akari-hotel/foot-main
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink footer with the wordmark, address, hours and link columns.
 */
?>
<!-- wp:group {"className":"ak-footer","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ak-footer"><!-- wp:group {"className":"ak-foot","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide ak-foot"><!-- wp:group {"className":"ak-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ak-foot__brand"><!-- wp:paragraph {"className":"ak-foot__mark"} -->
<p class="ak-foot__mark"><?php echo esc_html( akari_hotel_t( 'wordmark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'foot_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-foot__addr"} -->
<p class="ak-foot__addr"><?php echo esc_html( akari_hotel_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ak-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ak-foot__cols"><!-- wp:group {"className":"ak-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-foot__col"><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/stay/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_stay' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_rooms' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_rates' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-foot__col"><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/breakfast-bar/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_bb' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/neighbourhood/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_nb' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-foot__col"><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/work-stays/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_work' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_people' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_faq' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ak-foot__link"} -->
<p class="ak-foot__link"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'nav_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ak-foot__legal"} -->
<p class="ak-foot__legal"><?php echo esc_html( akari_hotel_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
