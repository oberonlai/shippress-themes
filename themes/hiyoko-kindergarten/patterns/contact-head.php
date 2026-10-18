<?php
/**
 * Title: Book a seat: page head
 * Slug: hiyoko-kindergarten/contact-head
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: A dandelion yellow page head with a faint paper grain, the eyebrow, title and lead and a photo; the cut-out wooden blocks breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-pagehead"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hiyoko_kindergarten_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hk-pagehead__title"} -->
<h1 class="wp-block-heading hk-pagehead__title"><?php echo esc_html( hiyoko_kindergarten_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hk-pagehead__lead"} -->
<p class="hk-pagehead__lead"><?php echo esc_html( hiyoko_kindergarten_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-pagehead__img"} -->
<figure class="wp-block-image size-full hk-piece hk-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-pagehead__branch"} -->
<figure class="wp-block-image size-full hk-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blocks-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hiyoko_kindergarten_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hk-tate"} -->
<p class="hk-tate"><?php echo esc_html( hiyoko_kindergarten_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
