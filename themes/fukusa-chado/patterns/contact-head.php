<?php
/**
 * Title: Trial lesson: page head
 * Slug: fukusa-chado/contact-head
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: A tokiwa-green page head with a rounded clay picture card on the right; the cut-out tea whisk breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-pagehead"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "fc-pagehead__title"} -->
<h1 class="wp-block-heading fc-pagehead__title"><?php echo esc_html( fukusa_chado_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-pagehead__lead"} -->
<p class="fc-pagehead__lead"><?php echo esc_html( fukusa_chado_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-pagehead__img"} -->
<figure class="wp-block-image size-full fc-piece fc-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-pagehead__branch"} -->
<figure class="wp-block-image size-full fc-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/whisk-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== fukusa_chado_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "fc-tate"} -->
<p class="fc-tate"><?php echo esc_html( fukusa_chado_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
