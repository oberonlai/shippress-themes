<?php
/**
 * Title: First meeting: page head
 * Slug: hidamari-care/contact-head
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: A celadon page head: the eyebrow, title and lead beside a framed photo; the cut-out armchair breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-pagehead"><!-- wp:paragraph {"className": "hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hc-pagehead__title"} -->
<h1 class="wp-block-heading hc-pagehead__title"><?php echo esc_html( hidamari_care_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hc-pagehead__lead"} -->
<p class="hc-pagehead__lead"><?php echo esc_html( hidamari_care_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hc-piece hc-pagehead__img"} -->
<figure class="wp-block-image size-full hc-piece hc-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_garden' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hc-pagehead__branch"} -->
<figure class="wp-block-image size-full hc-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/armchair-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== hidamari_care_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hc-tate"} -->
<p class="hc-tate"><?php echo esc_html( hidamari_care_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
