<?php
/**
 * Title: Letters: page head
 * Slug: teuchi-udon/letter-head
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: A chitose green page head with the eyebrow, title and lead and a pencil sketch; the cut-out flour sack breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-pagehead"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tu-pagehead__title"} -->
<h1 class="wp-block-heading tu-pagehead__title"><?php echo esc_html( teuchi_udon_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-pagehead__lead"} -->
<p class="tu-pagehead__lead"><?php echo esc_html( teuchi_udon_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-pagehead__img"} -->
<figure class="wp-block-image size-full tu-piece tu-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/broth.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-pagehead__branch"} -->
<figure class="wp-block-image size-full tu-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flour-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== teuchi_udon_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tu-tate"} -->
<p class="tu-tate"><?php echo esc_html( teuchi_udon_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
