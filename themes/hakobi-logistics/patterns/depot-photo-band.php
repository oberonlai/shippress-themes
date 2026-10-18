<?php
/**
 * Title: Home: wide depot photograph with a caption
 * Slug: hakobi-logistics/depot-photo-band
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: One wide film-grain photograph of the central depot, the page's second and last photo, with a short caption.
 */
?>
<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none","className":"hg-depot"} -->
<figure class="wp-block-image alignfull size-full hg-depot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/depot.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_depot' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( hakobi_logistics_t( 'depot_cap' ) ); ?></figcaption></figure>
<!-- /wp:image -->
