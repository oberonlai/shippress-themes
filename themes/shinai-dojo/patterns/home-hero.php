<?php
/**
 * Title: Home: stacked collage on the madder field
 * Slug: shinai-dojo/home-hero
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: A magazine cover on the akane madder field with a faint asanoha pattern: the issue line, title, lead, buttons and the contents of this issue on the left; three isometric plates of the dojo stacked and offset on the right; the cut-out kendo helmet (transparent WebP) breaks out of the stack and over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sd-hero"><!-- wp:group {"className": "sd-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-hero__text"><!-- wp:paragraph {"className": "sd-issue"} -->
<p class="sd-issue"><?php echo esc_html( shinai_dojo_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sd-hero__title"} -->
<h1 class="wp-block-heading sd-hero__title"><?php echo esc_html( shinai_dojo_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-hero__lead"} -->
<p class="sd-hero__lead"><?php echo esc_html( shinai_dojo_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sd-hero__cta"} -->
<div class="wp-block-buttons sd-hero__cta"><!-- wp:button {"className": "sd-book"} -->
<div class="wp-block-button sd-book"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( shinai_dojo_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( shinai_dojo_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "sd-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-toc"><!-- wp:paragraph {"className": "sd-toc__label"} -->
<p class="sd-toc__label"><?php echo esc_html( shinai_dojo_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className": "sd-toc__list"} -->
<ul class="wp-block-list sd-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-stack"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-plate sd-plate--a"} -->
<figure class="wp-block-image size-full sd-plate sd-plate--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-hall.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-plate sd-plate--b"} -->
<figure class="wp-block-image size-full sd-plate sd-plate--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/keiko.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-plate sd-plate--c"} -->
<figure class="wp-block-image size-full sd-plate sd-plate--c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/entrance.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-hero__cut"} -->
<figure class="wp-block-image size-full sd-hero__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/men-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== shinai_dojo_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sd-tate"} -->
<p class="sd-tate"><?php echo esc_html( shinai_dojo_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
