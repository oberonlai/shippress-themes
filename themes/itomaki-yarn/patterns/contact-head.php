<?php
/**
 * Title: Visit: page head
 * Slug: itomaki-yarn/contact-head
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: The kankurenai red page head of Visit, with the cut-out yarn spool breaking over its diagonal bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-pagehead iy-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-pagehead iy-pagehead--field"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "iy-pagehead__title"} -->
<h1 class="wp-block-heading iy-pagehead__title"><?php echo esc_html( itomaki_yarn_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "iy-pagehead__lead"} -->
<p class="iy-pagehead__lead"><?php echo esc_html( itomaki_yarn_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-pagehead__cut"} -->
<figure class="wp-block-image size-full iy-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yarn-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== itomaki_yarn_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "iy-tate"} -->
<p class="iy-tate"><?php echo esc_html( itomaki_yarn_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
