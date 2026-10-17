<?php
/**
 * Title: The workshop: page head
 * Slug: amime-takezaiku/about-head
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The kariyasu yellow page head of The workshop.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-pagehead tk-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-pagehead tk-pagehead--field"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tk-pagehead__title"} -->
<h1 class="wp-block-heading tk-pagehead__title"><?php echo esc_html( amime_takezaiku_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-pagehead__lead"} -->
<p class="tk-pagehead__lead"><?php echo esc_html( amime_takezaiku_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-pagehead__cut"} -->
<figure class="wp-block-image size-full tk-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/basket-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== amime_takezaiku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tk-tate"} -->
<p class="tk-tate"><?php echo esc_html( amime_takezaiku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
