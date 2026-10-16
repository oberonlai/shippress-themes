<?php
/**
 * Title: The market: page head
 * Slug: ichiba-monozukuri/about-head
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The indigo page head of The market.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-pagehead"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "im-pagehead__title"} -->
<h1 class="wp-block-heading im-pagehead__title"><?php echo esc_html( ichiba_monozukuri_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-pagehead__lead"} -->
<p class="im-pagehead__lead"><?php echo esc_html( ichiba_monozukuri_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<?php if ( '' !== ichiba_monozukuri_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "im-tate"} -->
<p class="im-tate"><?php echo esc_html( ichiba_monozukuri_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
