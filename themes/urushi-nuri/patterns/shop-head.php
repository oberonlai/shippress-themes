<?php
/**
 * Title: Shop: page head
 * Slug: urushi-nuri/shop-head
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The seiheki page head of the shop page, with the cut-out bowl breaking over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-pagehead un-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-pagehead un-pagehead--field"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'shop_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "un-pagehead__title"} -->
<h1 class="wp-block-heading un-pagehead__title"><?php echo esc_html( urushi_nuri_t( 'strip_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "un-pagehead__lead"} -->
<p class="un-pagehead__lead"><?php echo esc_html( urushi_nuri_t( 'shop_quiet' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-pagehead__cut"} -->
<figure class="wp-block-image size-full un-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== urushi_nuri_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "un-tate"} -->
<p class="un-tate"><?php echo esc_html( urushi_nuri_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
