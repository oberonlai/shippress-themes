<?php
/**
 * Title: Home: split-screen hero over a full-bleed photograph
 * Slug: kanna-komuten/home-hero
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: A full-bleed film photograph of the workshop runs edge to edge behind the hero; the left half is a solid turmeric-yellow panel with the line, the title, the lead, the buttons and what we do. The cut-out hand plane sits on the seam and breaks out of the panel, over the photograph and over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kn-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-hero__photo"} -->
<figure class="wp-block-image size-full kn-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-workshop.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kn-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-hero__text"><!-- wp:paragraph {"className": "kn-issue"} -->
<p class="kn-issue"><?php echo esc_html( kanna_komuten_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kn-hero__title"} -->
<h1 class="wp-block-heading kn-hero__title"><?php echo esc_html( kanna_komuten_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-hero__lead"} -->
<p class="kn-hero__lead"><?php echo esc_html( kanna_komuten_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kn-hero__cta"} -->
<div class="wp-block-buttons kn-hero__cta"><!-- wp:button {"className": "kn-book"} -->
<div class="wp-block-button kn-book"><a class="wp-block-button__link wp-element-button" href="/survey/"><?php echo esc_html( kanna_komuten_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/works/"><?php echo esc_html( kanna_komuten_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "kn-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-toc"><!-- wp:paragraph {"className": "kn-toc__label"} -->
<p class="kn-toc__label"><?php echo esc_html( kanna_komuten_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "kn-toc__list"} -->
<ol class="wp-block-list kn-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-hero__house"} -->
<figure class="wp-block-image size-full kn-hero__house"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plane-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kanna_komuten_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kn-tate"} -->
<p class="kn-tate"><?php echo esc_html( kanna_komuten_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
