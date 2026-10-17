<?php
/**
 * Title: Letters: page head
 * Slug: shirayami-butoh/letter-head
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: A sumire violet page head with the eyebrow, title and lead centred in the column and a high-key photograph below; the cut-out silk breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-pagehead"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sb-pagehead__title"} -->
<h1 class="wp-block-heading sb-pagehead__title"><?php echo esc_html( shirayami_butoh_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-pagehead__lead"} -->
<p class="sb-pagehead__lead"><?php echo esc_html( shirayami_butoh_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-pagehead__img"} -->
<figure class="wp-block-image size-full sb-piece sb-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cloth.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-pagehead__branch"} -->
<figure class="wp-block-image size-full sb-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/silk-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== shirayami_butoh_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sb-tate"} -->
<p class="sb-tate"><?php echo esc_html( shirayami_butoh_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
