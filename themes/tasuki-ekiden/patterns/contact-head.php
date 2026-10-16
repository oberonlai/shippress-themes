<?php
/**
 * Title: Entries: page head
 * Slug: tasuki-ekiden/contact-head
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The konpeki page head of Entries.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-pagehead"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow"><?php echo esc_html( tasuki_ekiden_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "te-pagehead__title"} -->
<h1 class="wp-block-heading te-pagehead__title"><?php echo esc_html( tasuki_ekiden_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-pagehead__lead"} -->
<p class="te-pagehead__lead"><?php echo esc_html( tasuki_ekiden_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-pagehead__cat"} -->
<figure class="wp-block-image size-full te-pagehead__cat"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/runner-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tasuki_ekiden_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "te-tate"} -->
<p class="te-tate"><?php echo esc_html( tasuki_ekiden_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
