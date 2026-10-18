<?php
/**
 * Title: First meeting: page head
 * Slug: hirameki-lab/contact-head
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: A kouji orange page head with a fine grain texture: the eyebrow, title and lead beside a framed photo; the cut-out plant sensor breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-pagehead"><!-- wp:paragraph {"className": "hl-eyebrow"} -->
<p class="hl-eyebrow"><?php echo esc_html( hirameki_lab_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hl-pagehead__title"} -->
<h1 class="wp-block-heading hl-pagehead__title"><?php echo esc_html( hirameki_lab_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hl-pagehead__lead"} -->
<p class="hl-pagehead__lead"><?php echo esc_html( hirameki_lab_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hl-piece hl-pagehead__img"} -->
<figure class="wp-block-image size-full hl-piece hl-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_lab' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hl-pagehead__branch"} -->
<figure class="wp-block-image size-full hl-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sensor-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hirameki_lab_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hl-tate"} -->
<p class="hl-tate"><?php echo esc_html( hirameki_lab_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
