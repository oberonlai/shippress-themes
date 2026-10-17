<?php
/**
 * Title: Shop: page head
 * Slug: karan-geta/shop-head
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: The turquoise page head of the shop page, with the cut-out geta breaking over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-pagehead kg-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-pagehead kg-pagehead--field"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'shop_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kg-pagehead__title"} -->
<h1 class="wp-block-heading kg-pagehead__title"><?php echo esc_html( karan_geta_t( 'strip_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-pagehead__lead"} -->
<p class="kg-pagehead__lead"><?php echo esc_html( karan_geta_t( 'shop_quiet' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-pagehead__cut"} -->
<figure class="wp-block-image size-full kg-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/geta-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== karan_geta_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kg-tate"} -->
<p class="kg-tate"><?php echo esc_html( karan_geta_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
