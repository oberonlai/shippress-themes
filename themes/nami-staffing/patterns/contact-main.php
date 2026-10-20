<?php
/**
 * Title: Contact: office details, message form and photograph
 * Slug: nami-staffing/contact-main
 * Categories: nami-staffing
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced office details and a plain message form, then a photograph of the reception.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-section ns-section--flush ns-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-section ns-section--flush ns-section--last"><!-- wp:group {"align":"wide","className":"ns-split ns-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-split ns-split--top"><!-- wp:group {"className":"ns-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ns-split__text"><!-- wp:group {"className":"ns-card","layout":{"type":"default"}} -->
<div class="wp-block-group ns-card"><!-- wp:pattern {"slug":"nami-staffing/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ns-contact__photo"} -->
<figure class="wp-block-image size-large ns-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-split__text ns-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group ns-split__text ns-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ns-split__title"} -->
<h2 class="wp-block-heading ns-split__title"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ns-form" action="#" method="post"><p class="ns-field"><label for="ns-name"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_05' ) ); ?></label><input id="ns-name" name="name" type="text" autocomplete="name"></p><p class="ns-field"><label for="ns-email"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_06' ) ); ?></label><input id="ns-email" name="contact" type="text" autocomplete="email"></p><p class="ns-field"><label for="ns-course"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_07' ) ); ?></label><select id="ns-course" name="course"><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( nami_staffing_t( 'contact_main_13' ) ); ?></option></select></p><p class="ns-field"><label for="ns-note"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_14' ) ); ?></label><textarea id="ns-note" name="note" rows="4"></textarea></p><p class="ns-field"><button type="submit"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ns-small"} -->
<p class="ns-small"><?php echo wp_kses_post( nami_staffing_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
