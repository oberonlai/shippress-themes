<?php
/**
 * Title: About: page head
 * Slug: tsutsumi-packaging/about-head
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: An amber page head: the eyebrow, title and lead beside a framed photo; the cut-out carton breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-pagehead"><!-- wp:paragraph {"className": "tp-eyebrow"} -->
<p class="tp-eyebrow"><?php echo esc_html( tsutsumi_packaging_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tp-pagehead__title"} -->
<h1 class="wp-block-heading tp-pagehead__title"><?php echo esc_html( tsutsumi_packaging_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tp-pagehead__lead"} -->
<p class="tp-pagehead__lead"><?php echo esc_html( tsutsumi_packaging_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tp-piece tp-pagehead__img"} -->
<figure class="wp-block-image size-full tp-piece tp-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/factory.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_factory' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tp-pagehead__branch"} -->
<figure class="wp-block-image size-full tp-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/carton-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tsutsumi_packaging_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tp-tate"} -->
<p class="tp-tate"><?php echo esc_html( tsutsumi_packaging_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
