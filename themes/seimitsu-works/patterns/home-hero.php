<?php
/**
 * Title: Home: text left, framed photograph right
 * Slug: seimitsu-works/home-hero
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: Text on the ai-nezumi field on the left; on the right a framed high-key photograph of the machining hall, with the cut-out machined flange breaking over the frame corner and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sw-hero"><!-- wp:group {"className": "sw-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-hero__text"><!-- wp:paragraph {"className": "sw-issue"} -->
<p class="sw-issue"><?php echo esc_html( seimitsu_works_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sw-hero__title"} -->
<h1 class="wp-block-heading sw-hero__title"><?php echo esc_html( seimitsu_works_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-hero__lead"} -->
<p class="sw-hero__lead"><?php echo esc_html( seimitsu_works_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sw-hero__cta"} -->
<div class="wp-block-buttons sw-hero__cta"><!-- wp:button {"className": "sw-book"} -->
<div class="wp-block-button sw-book"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( seimitsu_works_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/capabilities/"><?php echo esc_html( seimitsu_works_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "sw-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-toc"><!-- wp:paragraph {"className": "sw-toc__label"} -->
<p class="sw-toc__label"><?php echo esc_html( seimitsu_works_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "sw-toc__list"} -->
<ol class="wp-block-list sw-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-hero__frame"} -->
<figure class="wp-block-image size-full sw-hero__frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hall.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-hero__bowl"} -->
<figure class="wp-block-image size-full sw-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flange-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== seimitsu_works_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sw-tate"} -->
<p class="sw-tate"><?php echo esc_html( seimitsu_works_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
