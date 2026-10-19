<?php
/**
 * Title: Newsletter: page head
 * Slug: tsunagu-systems/letter-head
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: A wisteria page head: the eyebrow, title and lead beside a framed photo; the cut-out laptop breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-pagehead"><!-- wp:paragraph {"className": "ts-eyebrow"} -->
<p class="ts-eyebrow"><?php echo esc_html( tsunagu_systems_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ts-pagehead__title"} -->
<h1 class="wp-block-heading ts-pagehead__title"><?php echo esc_html( tsunagu_systems_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ts-pagehead__lead"} -->
<p class="ts-pagehead__lead"><?php echo esc_html( tsunagu_systems_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ts-piece ts-pagehead__img"} -->
<figure class="wp-block-image size-full ts-piece ts-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-team.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_office' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ts-pagehead__branch"} -->
<figure class="wp-block-image size-full ts-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/laptop-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tsunagu_systems_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ts-tate"} -->
<p class="ts-tate"><?php echo esc_html( tsunagu_systems_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
