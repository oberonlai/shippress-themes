<?php
/**
 * Title: Footer: facts and links
 * Slug: ashiato-hotel/footer-main
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: Sage footer with the hotel facts, the page links and one paw trail.
 */
?>
<!-- wp:group {"className":"ah-foot","layout":{"type":"default"}} -->
<div class="wp-block-group ah-foot"><!-- wp:group {"className":"ah-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group ah-foot__in"><!-- wp:group {"className":"ah-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ah-foot__brand"><!-- wp:html -->
<p class="ah-foot__logo"><?php echo ashiato_hotel_icon( 'paw', 'ah-logo__paw' ); ?><span class="ah-logo__t"><?php echo esc_html( ashiato_hotel_t( 'logo_name' ) ); ?></span> <span class="ah-logo__s"><?php echo esc_html( ashiato_hotel_t( 'logo_sub' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ah-foot__tag"} -->
<p class="ah-foot__tag"><?php echo esc_html( ashiato_hotel_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ah-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"ah-foot__h"} -->
<h3 class="wp-block-heading ah-foot__h"><?php echo esc_html( ashiato_hotel_t( 'foot_find' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'foot_address' ) ); ?><br><a href="tel:+000044310002468">+00 44 3100 2468</a><br><a href="mailto:stay@ashiatohotel.example">stay@ashiatohotel.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"ah-foot__h"} -->
<h3 class="wp-block-heading ah-foot__h"><?php echo esc_html( ashiato_hotel_t( 'foot_hours_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( ashiato_hotel_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( ashiato_hotel_t( 'foot_hours_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"className":"ah-foot__h"} -->
<h3 class="wp-block-heading ah-foot__h"><?php echo esc_html( ashiato_hotel_t( 'foot_pages_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-foot__index"} -->
<p class="ah-foot__index"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_about' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_rooms' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/dogs/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_dogs' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/dog-run/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_run' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_faq' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_book' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_contact' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_letter' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'nav_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-foot__trail" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ah-foot__legal"} -->
<p class="ah-foot__legal"><?php echo esc_html( ashiato_hotel_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
