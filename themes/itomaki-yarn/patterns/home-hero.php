<?php
/**
 * Title: Home: diagonal-split poster hero
 * Slug: itomaki-yarn/home-hero
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: A kankurenai red field cut on a diagonal across a watercolour of the yarn shop; the shop line set as a giant poster headline (a vertical line in Chinese and Japanese), the lead and the buttons on the red; a cut-out spool of red yarn sits on the diagonal seam and breaks over the hero's bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull iy-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-hero__art"} -->
<figure class="wp-block-image size-full iy-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop.webp' ) ); ?>" alt="<?php echo esc_attr( itomaki_yarn_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "iy-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-hero__type"><!-- wp:paragraph {"className": "iy-eyebrow iy-chip"} -->
<p class="iy-eyebrow iy-chip"><?php echo esc_html( itomaki_yarn_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "iy-hero__row", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-hero__row"><?php if ( '' !== itomaki_yarn_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "iy-tate"} -->
<p class="iy-tate"><?php echo esc_html( itomaki_yarn_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:heading {"level": 1, "className": "iy-hero__title"} -->
<h1 class="wp-block-heading iy-hero__title"><?php echo esc_html( itomaki_yarn_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "iy-hero__lead"} -->
<p class="iy-hero__lead"><?php echo esc_html( itomaki_yarn_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "iy-hero__cta"} -->
<div class="wp-block-buttons iy-hero__cta"><!-- wp:button {"className": "iy-book"} -->
<div class="wp-block-button iy-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( itomaki_yarn_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#iy-day"><?php echo esc_html( itomaki_yarn_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-hero__spool"} -->
<figure class="wp-block-image size-full iy-hero__spool"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yarn-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
