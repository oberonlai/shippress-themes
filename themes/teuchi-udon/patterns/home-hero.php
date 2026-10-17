<?php
/**
 * Title: Home: diagonal split on a chitose green field
 * Slug: teuchi-udon/home-hero
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: A diagonal split: the chitose green field with the issue line, title, lead, buttons and today's bowls on the left, the pencil sketch of the noodle kitchen cut on a slant on the right; the cut-out udon bowl sits on the seam and breaks over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull tu-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-hero__banner"} -->
<figure class="wp-block-image size-full tu-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tu-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-hero__text"><!-- wp:paragraph {"className": "tu-issue"} -->
<p class="tu-issue"><?php echo esc_html( teuchi_udon_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tu-hero__title"} -->
<h1 class="wp-block-heading tu-hero__title"><?php echo esc_html( teuchi_udon_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-hero__lead"} -->
<p class="tu-hero__lead"><?php echo esc_html( teuchi_udon_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tu-hero__cta"} -->
<div class="wp-block-buttons tu-hero__cta"><!-- wp:button {"className": "tu-book"} -->
<div class="wp-block-button tu-book"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( teuchi_udon_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu/"><?php echo esc_html( teuchi_udon_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "tu-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-toc"><!-- wp:paragraph {"className": "tu-toc__label"} -->
<p class="tu-toc__label"><?php echo esc_html( teuchi_udon_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "tu-toc__list"} -->
<ol class="wp-block-list tu-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-hero__bowl"} -->
<figure class="wp-block-image size-full tu-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== teuchi_udon_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tu-tate"} -->
<p class="tu-tate"><?php echo esc_html( teuchi_udon_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
