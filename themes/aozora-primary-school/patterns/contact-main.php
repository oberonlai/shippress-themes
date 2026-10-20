<?php
/**
 * Title: Contact: school details, message form and photograph
 * Slug: aozora-primary-school/contact-main
 * Categories: aozora-primary-school
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced school details and a plain message form, then a photograph of the school building.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-section ap-section--flush ap-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-section ap-section--flush ap-section--last"><!-- wp:group {"align":"wide","className":"ap-split ap-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-split ap-split--top"><!-- wp:group {"className":"ap-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ap-split__text"><!-- wp:group {"className":"ap-card","layout":{"type":"default"}} -->
<div class="wp-block-group ap-card"><!-- wp:pattern {"slug":"aozora-primary-school/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-contact__photo"} -->
<figure class="wp-block-image size-large ap-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'contact_main_01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-split__text ap-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group ap-split__text ap-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ap-split__title"} -->
<h2 class="wp-block-heading ap-split__title"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="ap-form" action="#" method="post"><p class="ap-field"><label for="ap-name"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_05' ) ); ?></label><input id="ap-name" name="name" type="text" autocomplete="name"></p><p class="ap-field"><label for="ap-email"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_06' ) ); ?></label><input id="ap-email" name="contact" type="text" autocomplete="email"></p><p class="ap-field"><label for="ap-course"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_07' ) ); ?></label><select id="ap-course" name="course"><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_13' ) ); ?></option></select></p><p class="ap-field"><label for="ap-note"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_14' ) ); ?></label><textarea id="ap-note" name="note" rows="4"></textarea></p><p class="ap-field"><button type="submit"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ap-small"} -->
<p class="ap-small"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
