<?php
/**
 * Title: First meeting: page head
 * Slug: manabi-juku/contact-head
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: A suou crimson page head with a grid-paper texture: the eyebrow, title and lead beside a framed photo; the cut-out desk lamp breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-pagehead"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mj-pagehead__title"} -->
<h1 class="wp-block-heading mj-pagehead__title"><?php echo esc_html( manabi_juku_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-pagehead__lead"} -->
<p class="mj-pagehead__lead"><?php echo esc_html( manabi_juku_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-pagehead__img"} -->
<figure class="wp-block-image size-full mj-piece mj-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-pagehead__branch"} -->
<figure class="wp-block-image size-full mj-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lamp-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== manabi_juku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mj-tate"} -->
<p class="mj-tate"><?php echo esc_html( manabi_juku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
