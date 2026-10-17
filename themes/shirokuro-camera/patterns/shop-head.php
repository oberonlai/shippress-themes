<?php
/**
 * Title: Shop: page head
 * Slug: shirokuro-camera/shop-head
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: The mikan orange page head of the shop page, with the cut-out clay camera breaking over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-pagehead sc-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-pagehead sc-pagehead--field"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'shop_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sc-pagehead__title"} -->
<h1 class="wp-block-heading sc-pagehead__title"><?php echo esc_html( shirokuro_camera_t( 'strip_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-pagehead__lead"} -->
<p class="sc-pagehead__lead"><?php echo esc_html( shirokuro_camera_t( 'shop_quiet' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-pagehead__cut"} -->
<figure class="wp-block-image size-full sc-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/camera-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== shirokuro_camera_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sc-tate"} -->
<p class="sc-tate"><?php echo esc_html( shirokuro_camera_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
