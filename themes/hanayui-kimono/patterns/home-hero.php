<?php
/**
 * Title: Home: full-bleed woodblock lane with the crimson panel
 * Slug: hanayui-kimono/home-hero
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: A full-width woodblock illustration of the old-town lane at dusk; an enji crimson panel holds the shop line (a vertical line in Chinese and Japanese), the lead and the booking button; the cut-out kimono on its stand breaks over the panel and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull hy-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-hero__art"} -->
<figure class="wp-block-image size-full hy-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-lane.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hy-hero__panel", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-hero__panel"><?php if ( '' !== hanayui_kimono_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hy-tate"} -->
<p class="hy-tate"><?php echo esc_html( hanayui_kimono_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "hy-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-hero__type"><!-- wp:paragraph {"className": "hy-eyebrow hy-chip"} -->
<p class="hy-eyebrow hy-chip"><?php echo esc_html( hanayui_kimono_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hy-hero__title"} -->
<h1 class="wp-block-heading hy-hero__title"><?php echo esc_html( hanayui_kimono_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-hero__lead"} -->
<p class="hy-hero__lead"><?php echo esc_html( hanayui_kimono_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hy-hero__cta"} -->
<div class="wp-block-buttons hy-hero__cta"><!-- wp:button {"className": "hy-book is-style-outline-light"} -->
<div class="wp-block-button hy-book is-style-outline-light"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( hanayui_kimono_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#hy-day"><?php echo esc_html( hanayui_kimono_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-hero__kimono"} -->
<figure class="wp-block-image size-full hy-hero__kimono"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kimono-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
