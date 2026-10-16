<?php
/**
 * Title: Newsletter: page head
 * Slug: soroban-kaikei/letter-head
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: The split charcoal page head of Newsletter.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-pagehead"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'letter_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sk-pagehead__title"} -->
<h1 class="wp-block-heading sk-pagehead__title"><?php echo esc_html( soroban_kaikei_t( 'letter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-pagehead__lead"} -->
<p class="sk-pagehead__lead"><?php echo esc_html( soroban_kaikei_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-pagehead__cat"} -->
<figure class="wp-block-image size-full sk-pagehead__cat"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/soroban-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== soroban_kaikei_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sk-tate"} -->
<p class="sk-tate"><?php echo esc_html( soroban_kaikei_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
