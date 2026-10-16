<?php
/**
 * Title: Home: scene-map hero
 * Slug: hoshizora-camp/home-hero
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The azalea-pink field with the title, and the watercolour site map in a frame with numbered pins; a cut-out bell tent steps out of the map frame and over the hero edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull hz-hero"><!-- wp:group {"className": "hz-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-hero__type"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hz-hero__title"} -->
<h1 class="wp-block-heading hz-hero__title"><?php echo esc_html( hoshizora_camp_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-hero__lead"} -->
<p class="hz-hero__lead"><?php echo esc_html( hoshizora_camp_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hz-hero__cta"} -->
<div class="wp-block-buttons hz-hero__cta"><!-- wp:button {"className": "hz-book"} -->
<div class="wp-block-button hz-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( hoshizora_camp_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo esc_html( hoshizora_camp_t( 'see_tents' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( '' !== hoshizora_camp_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hz-tate"} -->
<p class="hz-tate"><?php echo esc_html( hoshizora_camp_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "hz-hero__scene", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-hero__scene"><!-- wp:pattern {"slug":"hoshizora-camp/site-map"} /-->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-hero__tent"} -->
<figure class="wp-block-image size-full hz-hero__tent"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tent-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
