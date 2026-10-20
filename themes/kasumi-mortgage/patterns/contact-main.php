<?php
/**
 * Title: Contact: school card, enquiry form and photograph
 * Slug: kasumi-mortgage/contact-main
 * Categories: kasumi-mortgage
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced school details and a plain first-lesson enquiry form, then a photograph of the depot street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-section--flush km-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-section--flush km-section--last"><!-- wp:group {"align":"wide","className":"km-split km-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split km-split--top"><!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:group {"className":"km-card","layout":{"type":"default"}} -->
<div class="wp-block-group km-card"><!-- wp:pattern {"slug":"kasumi-mortgage/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-contact__photo"} -->
<figure class="wp-block-image size-large km-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-interior.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-split__text km-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text km-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="km-form" action="#" method="post"><p class="km-field"><label for="km-name"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_05' ) ); ?></label><input id="km-name" name="name" type="text" autocomplete="name"></p><p class="km-field"><label for="km-email"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_06' ) ); ?></label><input id="km-email" name="contact" type="text" autocomplete="email"></p><p class="km-field"><label for="km-course"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_07' ) ); ?></label><select id="km-course" name="course"><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_13' ) ); ?></option></select></p><p class="km-field"><label for="km-note"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_14' ) ); ?></label><textarea id="km-note" name="note" rows="4"></textarea></p><p class="km-field"><button type="submit"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-small"} -->
<p class="km-small"><?php echo wp_kses_post( kasumi_mortgage_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
