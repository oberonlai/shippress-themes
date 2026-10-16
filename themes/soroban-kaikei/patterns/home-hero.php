<?php
/**
 * Title: Home: diagonal split hero
 * Slug: soroban-kaikei/home-hero
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: A charcoal field with the abacus pattern cut on a diagonal beside the office illustration; the cut-out abacus and ledger lie across the diagonal seam and break over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sk-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-hero__art"} -->
<figure class="wp-block-image size-full sk-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-hero__field", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-hero__field"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sk-hero__title"} -->
<h1 class="wp-block-heading sk-hero__title"><?php echo esc_html( soroban_kaikei_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-hero__lead"} -->
<p class="sk-hero__lead"><?php echo esc_html( soroban_kaikei_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sk-hero__cta"} -->
<div class="wp-block-buttons sk-hero__cta"><!-- wp:button {"className": "sk-book"} -->
<div class="wp-block-button sk-book"><a class="wp-block-button__link wp-element-button" href="/first-talk/"><?php echo esc_html( soroban_kaikei_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( soroban_kaikei_t( 'see_works' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "sk-hero__label"} -->
<p class="sk-hero__label"><?php echo esc_html( soroban_kaikei_t( 'panel_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-hero__pose"} -->
<figure class="wp-block-image size-full sk-hero__pose"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/soroban-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== soroban_kaikei_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sk-tate"} -->
<p class="sk-tate"><?php echo esc_html( soroban_kaikei_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
