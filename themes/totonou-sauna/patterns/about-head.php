<?php
/**
 * Title: The workshop: page head
 * Slug: totonou-sauna/about-head
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: An ouni orange page head with the eyebrow, title and lead and a photograph; the cut-out felt hat breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-pagehead"><!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow"><?php echo esc_html( totonou_sauna_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tn-pagehead__title"} -->
<h1 class="wp-block-heading tn-pagehead__title"><?php echo esc_html( totonou_sauna_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-pagehead__lead"} -->
<p class="tn-pagehead__lead"><?php echo esc_html( totonou_sauna_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-pagehead__img"} -->
<figure class="wp-block-image size-full tn-piece tn-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stove.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-pagehead__branch"} -->
<figure class="wp-block-image size-full tn-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hat-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== totonou_sauna_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tn-tate"} -->
<p class="tn-tate"><?php echo esc_html( totonou_sauna_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
