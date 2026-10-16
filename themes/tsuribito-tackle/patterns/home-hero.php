<?php
/**
 * Title: Home: full-bleed shore photo with the crimson strip
 * Slug: tsuribito-tackle/home-hero
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: A full-bleed high-key photograph of the misty shore with the shop line on its white sky; a crimson strip runs across its foot and the cut-out reel breaks out over the strip and the photo edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull tt-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-hero__photo"} -->
<figure class="wp-block-image size-full tt-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-shore.webp' ) ); ?>" alt="<?php echo esc_attr( tsuribito_tackle_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tt-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-hero__type"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tt-hero__title"} -->
<h1 class="wp-block-heading tt-hero__title"><?php echo esc_html( tsuribito_tackle_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-hero__lead"} -->
<p class="tt-hero__lead"><?php echo esc_html( tsuribito_tackle_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tt-hero__cta"} -->
<div class="wp-block-buttons tt-hero__cta"><!-- wp:button {"className": "tt-book"} -->
<div class="wp-block-button tt-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( tsuribito_tackle_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/tide-notes/"><?php echo esc_html( tsuribito_tackle_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( '' !== tsuribito_tackle_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tt-tate"} -->
<p class="tt-tate"><?php echo esc_html( tsuribito_tackle_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "tt-hero__strip", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-hero__strip"><!-- wp:paragraph {"className": "tt-hero__strip-text"} -->
<p class="tt-hero__strip-text"><?php echo esc_html( tsuribito_tackle_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tt-hero__strip-hint"} -->
<p class="tt-hero__strip-hint"><?php echo esc_html( tsuribito_tackle_t( 'board_open' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-hero__reel"} -->
<figure class="wp-block-image size-full tt-hero__reel"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/reel-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
