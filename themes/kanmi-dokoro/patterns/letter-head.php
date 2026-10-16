<?php
/**
 * Title: Newsletter: page head
 * Slug: kanmi-dokoro/letter-head
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: The split kikyo page head of Newsletter.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-pagehead"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow"><?php echo esc_html( kanmi_dokoro_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kd-pagehead__title"} -->
<h1 class="wp-block-heading kd-pagehead__title"><?php echo esc_html( kanmi_dokoro_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-pagehead__lead"} -->
<p class="kd-pagehead__lead"><?php echo esc_html( kanmi_dokoro_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-pagehead__cat"} -->
<figure class="wp-block-image size-full kd-pagehead__cat"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wagashi-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kanmi_dokoro_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kd-tate"} -->
<p class="kd-tate"><?php echo esc_html( kanmi_dokoro_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
