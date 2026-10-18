<?php
/**
 * Title: Letters: page head
 * Slug: michishirube-consulting/letter-head
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: A shikon violet page head, the eyebrow, title and lead and a photo; the cut-out brass compass breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-pagehead"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mc-pagehead__title"} -->
<h1 class="wp-block-heading mc-pagehead__title"><?php echo esc_html( michishirube_consulting_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-pagehead__lead"} -->
<p class="mc-pagehead__lead"><?php echo esc_html( michishirube_consulting_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-pagehead__img"} -->
<figure class="wp-block-image size-full mc-piece mc-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/boardroom.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-pagehead__branch"} -->
<figure class="wp-block-image size-full mc-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/compass-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== michishirube_consulting_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mc-tate"} -->
<p class="mc-tate"><?php echo esc_html( michishirube_consulting_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
