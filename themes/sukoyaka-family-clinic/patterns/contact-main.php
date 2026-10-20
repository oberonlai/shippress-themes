<?php
/**
 * Title: Contact: clinic card, message form and photograph
 * Slug: sukoyaka-family-clinic/contact-main
 * Categories: sukoyaka-family-clinic
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced clinic details and a plain message form, then a photograph of the clinic front.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section sf-section--flush sf-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section sf-section--flush sf-section--last"><!-- wp:group {"align":"wide","className":"sf-split sf-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-split sf-split--top"><!-- wp:group {"className":"sf-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text"><!-- wp:group {"className":"sf-card","layout":{"type":"default"}} -->
<div class="wp-block-group sf-card"><!-- wp:pattern {"slug":"sukoyaka-family-clinic/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-contact__photo"} -->
<figure class="wp-block-image size-large sf-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/clinic-exterior.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-split__text sf-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group sf-split__text sf-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sf-split__title"} -->
<h2 class="wp-block-heading sf-split__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sf-form" action="#" method="post"><p class="sf-field"><label for="sf-name"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_05' ) ); ?></label><input id="sf-name" name="name" type="text" autocomplete="name"></p><p class="sf-field"><label for="sf-email"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_06' ) ); ?></label><input id="sf-email" name="contact" type="text" autocomplete="email"></p><p class="sf-field"><label for="sf-course"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_07' ) ); ?></label><select id="sf-course" name="course"><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_13' ) ); ?></option></select></p><p class="sf-field"><label for="sf-note"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_14' ) ); ?></label><textarea id="sf-note" name="note" rows="4"></textarea></p><p class="sf-field"><button type="submit"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sf-small"} -->
<p class="sf-small"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
