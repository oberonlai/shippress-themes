<?php
/**
 * Title: Book a seat: page head
 * Slug: yukimi-kakigori/contact-head
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: A rikyū sage page head with the eyebrow, title and lead and a taped paper-cut picture; the cut-out plover flag breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-pagehead"><!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow"><?php echo esc_html( yukimi_kakigori_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "yk-pagehead__title"} -->
<h1 class="wp-block-heading yk-pagehead__title"><?php echo esc_html( yukimi_kakigori_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-pagehead__lead"} -->
<p class="yk-pagehead__lead"><?php echo esc_html( yukimi_kakigori_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-pagehead__img"} -->
<figure class="wp-block-image size-full yk-piece yk-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/counter.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-pagehead__branch"} -->
<figure class="wp-block-image size-full yk-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flag-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== yukimi_kakigori_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "yk-tate"} -->
<p class="yk-tate"><?php echo esc_html( yukimi_kakigori_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
