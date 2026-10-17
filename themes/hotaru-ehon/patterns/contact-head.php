<?php
/**
 * Title: Book a seat: page head
 * Slug: hotaru-ehon/contact-head
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: A imayo pink page head with the eyebrow, title and lead and a taped flat 2D picture; the cut-out fox with a picture book breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-pagehead"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ht-pagehead__title"} -->
<h1 class="wp-block-heading ht-pagehead__title"><?php echo esc_html( hotaru_ehon_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-pagehead__lead"} -->
<p class="ht-pagehead__lead"><?php echo esc_html( hotaru_ehon_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-pagehead__img"} -->
<figure class="wp-block-image size-full ht-piece ht-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-pagehead__branch"} -->
<figure class="wp-block-image size-full ht-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fox-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hotaru_ehon_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ht-tate"} -->
<p class="ht-tate"><?php echo esc_html( hotaru_ehon_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
