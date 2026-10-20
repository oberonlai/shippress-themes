<?php
/**
 * Title: Contact: office details, message form and photograph
 * Slug: hatsumei-patent/contact-main
 * Categories: hatsumei-patent
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced office details and a plain message form, then a photograph of the reception.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-section hp-section--flush hp-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-section hp-section--flush hp-section--last"><!-- wp:group {"align":"wide","className":"hp-split hp-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-split hp-split--top"><!-- wp:group {"className":"hp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text"><!-- wp:group {"className":"hp-card","layout":{"type":"default"}} -->
<div class="wp-block-group hp-card"><!-- wp:pattern {"slug":"hatsumei-patent/office"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hp-contact__photo hp-cut hp-cut--a"} -->
<figure class="wp-block-image size-large hp-contact__photo hp-cut hp-cut--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/filing.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'contact_main_01' ) ); ?>"/><figcaption class="wp-element-caption"><span>(001)</span></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-split__text hp-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text hp-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hp-split__title"} -->
<h2 class="wp-block-heading hp-split__title"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hp-form" action="#" method="post"><p class="hp-field"><label for="hp-name"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_05' ) ); ?></label><input id="hp-name" name="name" type="text" autocomplete="name"></p><p class="hp-field"><label for="hp-email"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_06' ) ); ?></label><input id="hp-email" name="contact" type="text" autocomplete="email"></p><p class="hp-field"><label for="hp-course"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_07' ) ); ?></label><select id="hp-course" name="course"><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_08' ) ); ?></option><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_09' ) ); ?></option><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_10' ) ); ?></option><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_11' ) ); ?></option><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_12' ) ); ?></option><option><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_13' ) ); ?></option></select></p><p class="hp-field"><label for="hp-note"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_14' ) ); ?></label><textarea id="hp-note" name="note" rows="4"></textarea></p><p class="hp-field"><button type="submit"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_15' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hp-small"} -->
<p class="hp-small"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_main_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
