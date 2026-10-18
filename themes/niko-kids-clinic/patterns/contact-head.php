<?php
/**
 * Title: First meeting: page head
 * Slug: niko-kids-clinic/contact-head
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: A pale aqua page head with a fine grain texture: the eyebrow, title and lead beside a framed photo; the cut-out stethoscope breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-pagehead"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "nk-pagehead__title"} -->
<h1 class="wp-block-heading nk-pagehead__title"><?php echo esc_html( niko_kids_clinic_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-pagehead__lead"} -->
<p class="nk-pagehead__lead"><?php echo esc_html( niko_kids_clinic_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-pagehead__img"} -->
<figure class="wp-block-image size-full nk-piece nk-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-pagehead__branch"} -->
<figure class="wp-block-image size-full nk-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/scope-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== niko_kids_clinic_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "nk-tate"} -->
<p class="nk-tate"><?php echo esc_html( niko_kids_clinic_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
