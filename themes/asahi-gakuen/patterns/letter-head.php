<?php
/**
 * Title: Newsletter: page head
 * Slug: asahi-gakuen/letter-head
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: A forget-me-not page head: the eyebrow, title and lead beside a framed photo; a cut-out portrait breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-pagehead"><!-- wp:paragraph {"className": "ag-eyebrow"} -->
<p class="ag-eyebrow"><?php echo esc_html( asahi_gakuen_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ag-pagehead__title"} -->
<h1 class="wp-block-heading ag-pagehead__title"><?php echo esc_html( asahi_gakuen_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ag-pagehead__lead"} -->
<p class="ag-pagehead__lead"><?php echo esc_html( asahi_gakuen_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ag-piece ag-pagehead__img"} -->
<figure class="wp-block-image size-full ag-piece ag-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/classroom.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_classroom' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ag-pagehead__branch"} -->
<figure class="wp-block-image size-full ag-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-a-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== asahi_gakuen_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ag-tate"} -->
<p class="ag-tate"><?php echo esc_html( asahi_gakuen_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
