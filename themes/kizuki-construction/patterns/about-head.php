<?php
/**
 * Title: About: page head
 * Slug: kizuki-construction/about-head
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: A navy page head: the eyebrow, title and lead beside a framed photo; the cut-out safety helmet breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-pagehead"><!-- wp:paragraph {"className": "kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kizuki_construction_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kz-pagehead__title"} -->
<h1 class="wp-block-heading kz-pagehead__title"><?php echo esc_html( kizuki_construction_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kz-pagehead__lead"} -->
<p class="kz-pagehead__lead"><?php echo esc_html( kizuki_construction_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kz-piece kz-pagehead__img"} -->
<figure class="wp-block-image size-full kz-piece kz-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/handover.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_handover' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kz-pagehead__branch"} -->
<figure class="wp-block-image size-full kz-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/helmet-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kizuki_construction_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kz-tate"} -->
<p class="kz-tate"><?php echo esc_html( kizuki_construction_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
