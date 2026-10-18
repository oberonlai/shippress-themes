<?php
/**
 * Title: Home: a cut-out object breaking its frame on a dandelion field
 * Slug: hiyoko-kindergarten/home-hero
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: A cut-out object breaking its frame: the dandelion yellow field with a faint paper grain holds the issue line, title, lead, buttons and this month's questions on the left; the photo of a bright classroom is framed on the right, and the cut-out yellow backpack breaks out over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull hk-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-hero__banner"} -->
<figure class="wp-block-image size-full hk-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-room.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hk-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-hero__text"><!-- wp:paragraph {"className": "hk-issue"} -->
<p class="hk-issue"><?php echo esc_html( hiyoko_kindergarten_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hiyoko_kindergarten_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hk-hero__title"} -->
<h1 class="wp-block-heading hk-hero__title"><?php echo esc_html( hiyoko_kindergarten_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hk-hero__lead"} -->
<p class="hk-hero__lead"><?php echo esc_html( hiyoko_kindergarten_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hk-hero__cta"} -->
<div class="wp-block-buttons hk-hero__cta"><!-- wp:button {"className": "hk-book"} -->
<div class="wp-block-button hk-book"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( hiyoko_kindergarten_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( hiyoko_kindergarten_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "hk-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-toc"><!-- wp:paragraph {"className": "hk-toc__label"} -->
<p class="hk-toc__label"><?php echo esc_html( hiyoko_kindergarten_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "hk-toc__list"} -->
<ol class="wp-block-list hk-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-hero__bowl"} -->
<figure class="wp-block-image size-full hk-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bag-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== hiyoko_kindergarten_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hk-tate"} -->
<p class="hk-tate"><?php echo esc_html( hiyoko_kindergarten_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
