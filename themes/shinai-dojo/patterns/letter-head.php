<?php
/**
 * Title: Letters: page head
 * Slug: shinai-dojo/letter-head
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: A madder red page head with the asanoha pattern, the eyebrow, title and lead and an isometric plate; the cut-out dojo drum breaks over the bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-pagehead"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sd-pagehead__title"} -->
<h1 class="wp-block-heading sd-pagehead__title"><?php echo esc_html( shinai_dojo_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-pagehead__lead"} -->
<p class="sd-pagehead__lead"><?php echo esc_html( shinai_dojo_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-pagehead__img"} -->
<figure class="wp-block-image size-full sd-piece sd-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rack.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-pagehead__branch"} -->
<figure class="wp-block-image size-full sd-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drum-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== shinai_dojo_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sd-tate"} -->
<p class="sd-tate"><?php echo esc_html( shinai_dojo_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
