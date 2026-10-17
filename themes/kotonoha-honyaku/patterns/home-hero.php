<?php
/**
 * Title: Home: scene map on a ruri field
 * Slug: kotonoha-honyaku/home-hero
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: A scene map: the issue line, title, lead and buttons on the ruri field beside a risograph map of the harbour town in a paper frame, with this week's three jobs pinned on it as numbered labels; the cut-out fountain pen breaks over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kh-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-hero__banner"} -->
<figure class="wp-block-image size-full kh-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-map.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kh-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-hero__text"><!-- wp:paragraph {"className": "kh-issue"} -->
<p class="kh-issue"><?php echo esc_html( kotonoha_honyaku_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow"><?php echo esc_html( kotonoha_honyaku_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kh-hero__title"} -->
<h1 class="wp-block-heading kh-hero__title"><?php echo esc_html( kotonoha_honyaku_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-hero__lead"} -->
<p class="kh-hero__lead"><?php echo esc_html( kotonoha_honyaku_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kh-hero__cta"} -->
<div class="wp-block-buttons kh-hero__cta"><!-- wp:button {"className": "kh-book"} -->
<div class="wp-block-button kh-book"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( kotonoha_honyaku_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kotonoha_honyaku_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "kh-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-toc"><!-- wp:paragraph {"className": "kh-toc__label"} -->
<p class="kh-toc__label"><?php echo esc_html( kotonoha_honyaku_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "kh-toc__list"} -->
<ol class="wp-block-list kh-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-hero__bowl"} -->
<figure class="wp-block-image size-full kh-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pen-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== kotonoha_honyaku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kh-tate"} -->
<p class="kh-tate"><?php echo esc_html( kotonoha_honyaku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
