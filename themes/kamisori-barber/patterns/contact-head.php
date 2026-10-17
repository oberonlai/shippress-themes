<?php
/**
 * Title: Book a seat: page head
 * Slug: kamisori-barber/contact-head
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: A kyo-murasaki page head with the eyebrow, title and lead and a taped paper-cut picture; the cut-out shaving brush breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-pagehead"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kb-pagehead__title"} -->
<h1 class="wp-block-heading kb-pagehead__title"><?php echo esc_html( kamisori_barber_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-pagehead__lead"} -->
<p class="kb-pagehead__lead"><?php echo esc_html( kamisori_barber_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-pagehead__img"} -->
<figure class="wp-block-image size-full kb-piece kb-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-pagehead__branch"} -->
<figure class="wp-block-image size-full kb-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/brush-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kamisori_barber_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kb-tate"} -->
<p class="kb-tate"><?php echo esc_html( kamisori_barber_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
