<?php
/**
 * Title: Contact: school card, enquiry form and photograph
 * Slug: minato-business-hotel/contact-main
 * Categories: minato-business-hotel
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced school details and a plain first-lesson enquiry form, then a photograph of the depot street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-section--flush mb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-section--flush mb-section--last"><!-- wp:group {"align":"wide","className":"mb-split mb-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split mb-split--top"><!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:group {"className":"mb-card","layout":{"type":"default"}} -->
<div class="wp-block-group mb-card"><!-- wp:pattern {"slug":"minato-business-hotel/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-contact__photo"} -->
<figure class="wp-block-image size-large mb-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby-front-desk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-split__text mb-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text mb-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-split__title"} -->
<h2 class="wp-block-heading mb-split__title"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="mb-form" action="#" method="post"><p class="mb-field"><label for="mb-name"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_05' ) ); ?></label><input id="mb-name" name="name" type="text" autocomplete="name"></p><p class="mb-field"><label for="mb-email"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_06' ) ); ?></label><input id="mb-email" name="contact" type="text" autocomplete="email"></p><p class="mb-field"><label for="mb-course"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_07' ) ); ?></label><select id="mb-course" name="course"><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_13' ) ); ?></option></select></p><p class="mb-field"><label for="mb-note"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_14' ) ); ?></label><textarea id="mb-note" name="note" rows="4"></textarea></p><p class="mb-field"><button type="submit"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"mb-small"} -->
<p class="mb-small"><?php echo wp_kses_post( minato_business_hotel_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
