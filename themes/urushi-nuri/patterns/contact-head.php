<?php
/**
 * Title: Visit: page head
 * Slug: urushi-nuri/contact-head
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The seiheki page head of Visit.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-pagehead un-pagehead--field", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-pagehead un-pagehead--field"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "un-pagehead__title"} -->
<h1 class="wp-block-heading un-pagehead__title"><?php echo esc_html( urushi_nuri_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "un-pagehead__lead"} -->
<p class="un-pagehead__lead"><?php echo esc_html( urushi_nuri_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-pagehead__cut"} -->
<figure class="wp-block-image size-full un-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== urushi_nuri_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "un-tate"} -->
<p class="un-tate"><?php echo esc_html( urushi_nuri_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
