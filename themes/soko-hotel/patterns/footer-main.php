<?php
/**
 * Title: Footer: addresses, letter and the returning photograph
 * Slug: soko-hotel/footer-main
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: Warm-black footer with the bay stamp, address, hours, the newsletter form slot and the full-bleed warehouse photograph returning beneath.
 */
?>
<!-- wp:group {"className":"sk-foot","layout":{"type":"default"}} -->
<div class="wp-block-group sk-foot"><!-- wp:group {"className":"sk-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group sk-foot__in"><!-- wp:html -->
<p class="sk-foot__stamp" aria-hidden="true"><?php echo soko_hotel_icon( 'stamp', 'sk-stamp' ); ?></p>
<!-- /wp:html -->

<!-- wp:group {"className":"sk-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group sk-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"sk-foot__name"} -->
<p class="sk-foot__name"><?php echo esc_html( soko_hotel_t( 'logo_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'foot_address' ) ); ?><br><a href="tel:+00205550147">+00 20 555 0147</a><br><a href="mailto:stay@sokohotel.example">stay@sokohotel.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"sk-foot__h"} -->
<p class="sk-foot__h"><?php echo esc_html( soko_hotel_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( soko_hotel_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( soko_hotel_t( 'foot_hours_3' ) ); ?><br><?php echo esc_html( soko_hotel_t( 'foot_hours_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group sk-foot__letter"><!-- wp:paragraph {"className":"sk-foot__h"} -->
<p class="sk-foot__h"><?php echo esc_html( soko_hotel_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sokohotel.example', 'label' => soko_hotel_t( 'forms_email' ), 'submit' => soko_hotel_t( 'forms_subscribe' ), 'notice' => soko_hotel_t( 'forms_mail_notice' ), 'subject' => soko_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-foot__index"} -->
<p class="sk-foot__index"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_rooms' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/the-building/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_building' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_people' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/canteen/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_canteen' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_journal' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_visit' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_reserve' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_contact' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'nav_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-foot__legal"} -->
<p class="sk-foot__legal"><?php echo esc_html( soko_hotel_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-foot__band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-foot__band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-foot__fig"} -->
<figure class="wp-block-image size-full sk-foot__fig"><img src="<?php echo soko_hotel_img( 'warehouse-water.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
