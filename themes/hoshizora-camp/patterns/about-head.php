<?php
/**
 * Title: The meadow: page head
 * Slug: hoshizora-camp/about-head
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The azalea-pink page head of The meadow.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-pagehead"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hz-pagehead__title"} -->
<h1 class="wp-block-heading hz-pagehead__title"><?php echo esc_html( hoshizora_camp_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-pagehead__lead"} -->
<p class="hz-pagehead__lead"><?php echo esc_html( hoshizora_camp_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<?php if ( '' !== hoshizora_camp_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hz-tate"} -->
<p class="hz-tate"><?php echo esc_html( hoshizora_camp_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
