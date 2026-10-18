<?php
/**
 * Title: Book a seat: page head
 * Slug: mamori-hoken/contact-head
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: A hanada page head with a pencil-pattern texture, the eyebrow, title and lead and a pencil sketch; the cut-out house breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-pagehead"><!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow"><?php echo esc_html( mamori_hoken_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mh-pagehead__title"} -->
<h1 class="wp-block-heading mh-pagehead__title"><?php echo esc_html( mamori_hoken_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-pagehead__lead"} -->
<p class="mh-pagehead__lead"><?php echo esc_html( mamori_hoken_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-pagehead__img"} -->
<figure class="wp-block-image size-full mh-piece mh-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-pagehead__branch"} -->
<figure class="wp-block-image size-full mh-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/house-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== mamori_hoken_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mh-tate"} -->
<p class="mh-tate"><?php echo esc_html( mamori_hoken_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
