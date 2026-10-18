<?php
/**
 * Title: About: page head
 * Slug: hakobi-logistics/about-head
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: A bengara red page head: the eyebrow, title and lead beside a framed photo; the cut-out pallet breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-pagehead"><!-- wp:paragraph {"className": "hg-eyebrow"} -->
<p class="hg-eyebrow"><?php echo esc_html( hakobi_logistics_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hg-pagehead__title"} -->
<h1 class="wp-block-heading hg-pagehead__title"><?php echo esc_html( hakobi_logistics_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-pagehead__lead"} -->
<p class="hg-pagehead__lead"><?php echo esc_html( hakobi_logistics_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-pagehead__img"} -->
<figure class="wp-block-image size-full hg-piece hg-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/van.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_van' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-pagehead__branch"} -->
<figure class="wp-block-image size-full hg-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pallet-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hakobi_logistics_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hg-tate"} -->
<p class="hg-tate"><?php echo esc_html( hakobi_logistics_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
