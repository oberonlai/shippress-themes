<?php
/**
 * Title: Contact: page head
 * Slug: hanamizuki-dental/contact-head
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: A jade page head: the eyebrow, title and lead beside a framed photo; a cut-out portrait breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-pagehead"><!-- wp:paragraph {"className": "hd-eyebrow"} -->
<p class="hd-eyebrow"><?php echo esc_html( hanamizuki_dental_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hd-pagehead__title"} -->
<h1 class="wp-block-heading hd-pagehead__title"><?php echo esc_html( hanamizuki_dental_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hd-pagehead__lead"} -->
<p class="hd-pagehead__lead"><?php echo esc_html( hanamizuki_dental_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hd-piece hd-pagehead__img"} -->
<figure class="wp-block-image size-full hd-piece hd-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/treatment.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_treatment' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hd-pagehead__branch"} -->
<figure class="wp-block-image size-full hd-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dentist-a-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hanamizuki_dental_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hd-tate"} -->
<p class="hd-tate"><?php echo esc_html( hanamizuki_dental_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
