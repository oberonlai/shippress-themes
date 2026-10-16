<?php
/**
 * Title: Visit: page head
 * Slug: hanayui-kimono/contact-head
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: The crimson page head of Visit.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-pagehead hy-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-pagehead hy-pagehead--field"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hy-pagehead__title"} -->
<h1 class="wp-block-heading hy-pagehead__title"><?php echo esc_html( hanayui_kimono_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-pagehead__lead"} -->
<p class="hy-pagehead__lead"><?php echo esc_html( hanayui_kimono_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-pagehead__cut"} -->
<figure class="wp-block-image size-full hy-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wagasa-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hanayui_kimono_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hy-tate"} -->
<p class="hy-tate"><?php echo esc_html( hanayui_kimono_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
