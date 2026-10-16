<?php
/**
 * Title: The studio: page head
 * Slug: koma-manga/about-head
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: The bamboo-green page head of The studio.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-pagehead"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "km-pagehead__title"} -->
<h1 class="wp-block-heading km-pagehead__title"><?php echo esc_html( koma_manga_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-pagehead__lead"} -->
<p class="km-pagehead__lead"><?php echo esc_html( koma_manga_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-pagehead__cat"} -->
<figure class="wp-block-image size-full km-pagehead__cat"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cat-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== koma_manga_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "km-tate"} -->
<p class="km-tate"><?php echo esc_html( koma_manga_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
