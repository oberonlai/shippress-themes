<?php
/**
 * Title: Newsletter: page head
 * Slug: tsuribito-tackle/letter-head
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: The crimson page head of Newsletter.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-pagehead tt-pagehead--red", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-pagehead tt-pagehead--red"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tt-pagehead__title"} -->
<h1 class="wp-block-heading tt-pagehead__title"><?php echo esc_html( tsuribito_tackle_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-pagehead__lead"} -->
<p class="tt-pagehead__lead"><?php echo esc_html( tsuribito_tackle_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-pagehead__cut"} -->
<figure class="wp-block-image size-full tt-pagehead__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/float-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tsuribito_tackle_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tt-tate"} -->
<p class="tt-tate"><?php echo esc_html( tsuribito_tackle_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
