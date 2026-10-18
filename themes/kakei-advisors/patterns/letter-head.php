<?php
/**
 * Title: Newsletter: page head
 * Slug: kakei-advisors/letter-head
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: A pine-green page head with the eyebrow, title and lead beside a framed photo; the cut-out notebook breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-pagehead"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ka-pagehead__title"} -->
<h1 class="wp-block-heading ka-pagehead__title"><?php echo esc_html( kakei_advisors_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-pagehead__lead"} -->
<p class="ka-pagehead__lead"><?php echo esc_html( kakei_advisors_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-pagehead__img"} -->
<figure class="wp-block-image size-full ka-piece ka-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-pagehead__branch"} -->
<figure class="wp-block-image size-full ka-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kakei_advisors_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ka-tate"} -->
<p class="ka-tate"><?php echo esc_html( kakei_advisors_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
