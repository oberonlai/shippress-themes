<?php
/**
 * Title: Contact: office details, message form and photograph
 * Slug: kagi-security/contact-main
 * Categories: kagi-security
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced office details and a plain message form, then a photograph of the office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--flush ks-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--flush ks-section--last"><!-- wp:group {"align":"wide","className":"ks-split ks-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split ks-split--top"><!-- wp:group {"className":"ks-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__text"><!-- wp:group {"className":"ks-card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-card"><!-- wp:pattern {"slug":"kagi-security/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ks-contact__photo"} -->
<figure class="wp-block-image size-large ks-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-day.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-split__text ks-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__text ks-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-split__title"} -->
<h2 class="wp-block-heading ks-split__title"><?php echo wp_kses_post( kagi_security_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ks-form" action="#" method="post"><p class="ks-field"><label for="ks-name"><?php echo wp_kses_post( kagi_security_t( 'contact_main_05' ) ); ?></label><input id="ks-name" name="name" type="text" autocomplete="name"></p><p class="ks-field"><label for="ks-email"><?php echo wp_kses_post( kagi_security_t( 'contact_main_06' ) ); ?></label><input id="ks-email" name="contact" type="text" autocomplete="email"></p><p class="ks-field"><label for="ks-course"><?php echo wp_kses_post( kagi_security_t( 'contact_main_07' ) ); ?></label><select id="ks-course" name="course"><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( kagi_security_t( 'contact_main_13' ) ); ?></option></select></p><p class="ks-field"><label for="ks-note"><?php echo wp_kses_post( kagi_security_t( 'contact_main_14' ) ); ?></label><textarea id="ks-note" name="note" rows="4"></textarea></p><p class="ks-field"><button type="submit"><?php echo wp_kses_post( kagi_security_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small"><?php echo wp_kses_post( kagi_security_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
