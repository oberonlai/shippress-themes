<?php
/**
 * Title: Home: text left, watercolour right on the kariyasu field
 * Slug: amime-takezaiku/home-hero
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: A full kariyasu yellow field with a woven bamboo texture: the shop line, lead and buttons on the left (a vertical line in Chinese and Japanese); on the right a framed watercolour of the bamboo grove, with the cut-out basket breaking out over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull tk-hero"><!-- wp:group {"className": "tk-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-hero__type"><!-- wp:paragraph {"className": "tk-eyebrow tk-chip"} -->
<p class="tk-eyebrow tk-chip"><?php echo esc_html( amime_takezaiku_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "tk-hero__row", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-hero__row"><?php if ( '' !== amime_takezaiku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tk-tate"} -->
<p class="tk-tate"><?php echo esc_html( amime_takezaiku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:heading {"level": 1, "className": "tk-hero__title"} -->
<h1 class="wp-block-heading tk-hero__title"><?php echo esc_html( amime_takezaiku_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "tk-hero__lead"} -->
<p class="tk-hero__lead"><?php echo esc_html( amime_takezaiku_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tk-hero__cta"} -->
<div class="wp-block-buttons tk-hero__cta"><!-- wp:button {"className": "tk-book"} -->
<div class="wp-block-button tk-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( amime_takezaiku_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#tk-day"><?php echo esc_html( amime_takezaiku_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-hero__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-hero__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-hero__art"} -->
<figure class="wp-block-image size-full tk-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-art.webp' ) ); ?>" alt="<?php echo esc_attr( amime_takezaiku_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-hero__cut"} -->
<figure class="wp-block-image size-full tk-hero__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/basket-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
