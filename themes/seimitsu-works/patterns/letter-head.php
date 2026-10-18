<?php
/**
 * Title: Newsletter: page head
 * Slug: seimitsu-works/letter-head
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: An ai-nezumi blue-grey page head with a fine grid texture: the eyebrow, title and lead beside a framed photo; the cut-out turned shaft breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-pagehead"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sw-pagehead__title"} -->
<h1 class="wp-block-heading sw-pagehead__title"><?php echo esc_html( seimitsu_works_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-pagehead__lead"} -->
<p class="sw-pagehead__lead"><?php echo esc_html( seimitsu_works_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-piece sw-pagehead__img"} -->
<figure class="wp-block-image size-full sw-piece sw-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-pagehead__branch"} -->
<figure class="wp-block-image size-full sw-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shaft-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== seimitsu_works_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sw-tate"} -->
<p class="sw-tate"><?php echo esc_html( seimitsu_works_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
