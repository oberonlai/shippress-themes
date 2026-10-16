<?php
/**
 * Title: Book a trial: page head
 * Slug: shinayaka-pilates/contact-head
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: The yamabuki page head of Book a trial.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-pagehead"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow"><?php echo esc_html( shinayaka_pilates_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sp-pagehead__title"} -->
<h1 class="wp-block-heading sp-pagehead__title"><?php echo esc_html( shinayaka_pilates_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sp-pagehead__lead"} -->
<p class="sp-pagehead__lead"><?php echo esc_html( shinayaka_pilates_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-pagehead__cat"} -->
<figure class="wp-block-image size-full sp-pagehead__cat"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pose-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== shinayaka_pilates_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sp-tate"} -->
<p class="sp-tate"><?php echo esc_html( shinayaka_pilates_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
