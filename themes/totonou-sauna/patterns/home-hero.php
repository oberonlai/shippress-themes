<?php
/**
 * Title: Home: vertical banner on an ouni orange field
 * Slug: totonou-sauna/home-hero
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: A full-width ouni orange field: a tall hanging banner photograph of the steam room on the left, the sauna line, giant title, lead, buttons and today's board on the right; the cut-out wooden bucket hangs over the banner edge and breaks below the hero.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull tn-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-hero__banner"} -->
<figure class="wp-block-image size-full tn-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-steam.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tn-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-hero__text"><!-- wp:paragraph {"className": "tn-issue"} -->
<p class="tn-issue"><?php echo esc_html( totonou_sauna_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow"><?php echo esc_html( totonou_sauna_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tn-hero__title"} -->
<h1 class="wp-block-heading tn-hero__title"><?php echo esc_html( totonou_sauna_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-hero__lead"} -->
<p class="tn-hero__lead"><?php echo esc_html( totonou_sauna_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tn-hero__cta"} -->
<div class="wp-block-buttons tn-hero__cta"><!-- wp:button {"className": "tn-book"} -->
<div class="wp-block-button tn-book"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( totonou_sauna_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo esc_html( totonou_sauna_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "tn-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-toc"><!-- wp:paragraph {"className": "tn-toc__label"} -->
<p class="tn-toc__label"><?php echo esc_html( totonou_sauna_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "tn-toc__list"} -->
<ol class="wp-block-list tn-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-hero__bowl"} -->
<figure class="wp-block-image size-full tn-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bucket-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== totonou_sauna_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tn-tate"} -->
<p class="tn-tate"><?php echo esc_html( totonou_sauna_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
