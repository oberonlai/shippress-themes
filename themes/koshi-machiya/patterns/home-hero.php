<?php
/**
 * Title: Home: stacked collage hero
 * Slug: koshi-machiya/home-hero
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: A persimmon-orange cover: the issue line, the title, the lead and the contents on the left; three torn pencil sketches stacked and taped on the right, with the cut-out townhouse breaking out of the collage and over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kc-hero"><!-- wp:group {"className": "kc-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-hero__text"><!-- wp:paragraph {"className": "kc-issue"} -->
<p class="kc-issue"><?php echo esc_html( koshi_machiya_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kc-hero__title"} -->
<h1 class="wp-block-heading kc-hero__title"><?php echo esc_html( koshi_machiya_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-hero__lead"} -->
<p class="kc-hero__lead"><?php echo esc_html( koshi_machiya_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kc-hero__cta"} -->
<div class="wp-block-buttons kc-hero__cta"><!-- wp:button {"className": "kc-book"} -->
<div class="wp-block-button kc-book"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo esc_html( koshi_machiya_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/the-house/"><?php echo esc_html( koshi_machiya_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "kc-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-toc"><!-- wp:paragraph {"className": "kc-toc__label"} -->
<p class="kc-toc__label"><?php echo esc_html( koshi_machiya_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "kc-toc__list"} -->
<ol class="wp-block-list kc-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-collage", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--a"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/street.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--b"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tatami-room.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--c"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/courtyard.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-hero__house"} -->
<figure class="wp-block-image size-full kc-hero__house"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/house-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== koshi_machiya_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kc-tate"} -->
<p class="kc-tate"><?php echo esc_html( koshi_machiya_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
