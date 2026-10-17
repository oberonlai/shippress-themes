<?php
/**
 * Title: The workshop: page head
 * Slug: kanna-komuten/about-head
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: A split page head: the turmeric-yellow half with the title and lead, a film photograph filling the other half; the cut-out hand plane breaks over the seam and the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-pagehead"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kn-pagehead__title"} -->
<h1 class="wp-block-heading kn-pagehead__title"><?php echo esc_html( kanna_komuten_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-pagehead__lead"} -->
<p class="kn-pagehead__lead"><?php echo esc_html( kanna_komuten_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-pagehead__img"} -->
<figure class="wp-block-image size-full kn-piece kn-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shavings.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-pagehead__branch"} -->
<figure class="wp-block-image size-full kn-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plane-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kanna_komuten_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kn-tate"} -->
<p class="kn-tate"><?php echo esc_html( kanna_komuten_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
