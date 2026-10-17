<?php
/**
 * Title: Projects: page head
 * Slug: kotonoha-honyaku/works-head
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: A ruri page head with the eyebrow, title and lead and a risograph picture; the cut-out desk globe breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-pagehead"><!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow"><?php echo esc_html( kotonoha_honyaku_t( 'h_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kh-pagehead__title"} -->
<h1 class="wp-block-heading kh-pagehead__title"><?php echo esc_html( kotonoha_honyaku_t( 'h_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-pagehead__lead"} -->
<p class="kh-pagehead__lead"><?php echo esc_html( kotonoha_honyaku_t( 'h_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-pagehead__img"} -->
<figure class="wp-block-image size-full kh-piece kh-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-pagehead__branch"} -->
<figure class="wp-block-image size-full kh-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kotonoha_honyaku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kh-tate"} -->
<p class="kh-tate"><?php echo esc_html( kotonoha_honyaku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
