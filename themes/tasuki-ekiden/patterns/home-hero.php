<?php
/**
 * Title: Home: text left, art right hero
 * Slug: tasuki-ekiden/home-hero
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: White type on the konpeki field on the left, a framed sumi-ink painting of a sash handover on the right; the cut-out runner breaks out of the frame across the field and over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull te-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-hero__art"} -->
<figure class="wp-block-image size-full te-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-hero__field", "layout": {"type": "default"}} -->
<div class="wp-block-group te-hero__field"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow"><?php echo esc_html( tasuki_ekiden_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "te-hero__title"} -->
<h1 class="wp-block-heading te-hero__title"><?php echo esc_html( tasuki_ekiden_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-hero__lead"} -->
<p class="te-hero__lead"><?php echo esc_html( tasuki_ekiden_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "te-hero__cta"} -->
<div class="wp-block-buttons te-hero__cta"><!-- wp:button {"className": "te-book"} -->
<div class="wp-block-button te-book"><a class="wp-block-button__link wp-element-button" href="/enter/"><?php echo esc_html( tasuki_ekiden_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/course/"><?php echo esc_html( tasuki_ekiden_t( 'see_works' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "te-hero__label"} -->
<p class="te-hero__label"><?php echo esc_html( tasuki_ekiden_t( 'panel_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-hero__pose"} -->
<figure class="wp-block-image size-full te-hero__pose"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/runner-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tasuki_ekiden_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "te-tate"} -->
<p class="te-tate"><?php echo esc_html( tasuki_ekiden_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
