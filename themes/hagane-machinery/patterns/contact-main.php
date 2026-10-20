<?php
/**
 * Title: Contact: company card, quotation form and photograph
 * Slug: hagane-machinery/contact-main
 * Categories: hagane-machinery
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced company details and a plain quotation request form, then a photograph of the assembly bay.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-section--flush hm-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-section--flush hm-section--last"><!-- wp:group {"align":"wide","className":"hm-split hm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split hm-split--top"><!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:pattern {"slug":"hagane-machinery/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-contact__photo"} -->
<figure class="wp-block-image size-large hm-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/assembly-bay.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-split__text hm-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text hm-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-split__title"} -->
<h2 class="wp-block-heading hm-split__title"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hm-form" action="#" method="post"><p class="hm-field"><label for="hm-name"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_05' ) ); ?></label><input id="hm-name" name="name" type="text" autocomplete="name"></p><p class="hm-field"><label for="hm-email"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_06' ) ); ?></label><input id="hm-email" name="contact" type="text" autocomplete="email"></p><p class="hm-field"><label for="hm-course"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_07' ) ); ?></label><select id="hm-course" name="course"><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_13' ) ); ?></option></select></p><p class="hm-field"><label for="hm-note"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_14' ) ); ?></label><textarea id="hm-note" name="note" rows="4"></textarea></p><p class="hm-field"><button type="submit"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hm-small"} -->
<p class="hm-small"><?php echo wp_kses_post( hagane_machinery_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
