<?php
/**
 * Title: Book a stay: page head
 * Slug: koshi-machiya/contact-head
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: A persimmon page head with a torn, taped sketch on the right; the cut-out persimmon branch breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-pagehead"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kc-pagehead__title"} -->
<h1 class="wp-block-heading kc-pagehead__title"><?php echo esc_html( koshi_machiya_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-pagehead__lead"} -->
<p class="kc-pagehead__lead"><?php echo esc_html( koshi_machiya_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-pagehead__img"} -->
<figure class="wp-block-image size-full kc-piece kc-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dusk.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-pagehead__branch"} -->
<figure class="wp-block-image size-full kc-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/persimmon-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== koshi_machiya_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kc-tate"} -->
<p class="kc-tate"><?php echo esc_html( koshi_machiya_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
