<?php
/**
 * Title: Contact: school card, enquiry form and photograph
 * Slug: hokuto-driving-school/contact-main
 * Categories: hokuto-driving-school
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced school details and a plain first-lesson enquiry form, then a photograph of the depot street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush hk-section--last"><!-- wp:group {"align":"wide","className":"hk-split hk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--top"><!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:group {"className":"hk-card","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card"><!-- wp:pattern {"slug":"hokuto-driving-school/school"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-contact__photo"} -->
<figure class="wp-block-image size-large hk-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/parking.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-split__text hk-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text hk-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form" action="#" method="post"><p class="hk-field"><label for="hk-name"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_05' ) ); ?></label><input id="hk-name" name="name" type="text" autocomplete="name"></p><p class="hk-field"><label for="hk-email"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_06' ) ); ?></label><input id="hk-email" name="contact" type="text" autocomplete="email"></p><p class="hk-field"><label for="hk-course"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_07' ) ); ?></label><select id="hk-course" name="course"><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_13' ) ); ?></option></select></p><p class="hk-field"><label for="hk-note"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_14' ) ); ?></label><textarea id="hk-note" name="note" rows="4"></textarea></p><p class="hk-field"><button type="submit"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small"><?php echo wp_kses_post( hokuto_driving_school_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
