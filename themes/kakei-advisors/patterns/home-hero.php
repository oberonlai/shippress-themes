<?php
/**
 * Title: Home: a framed window on a pine-green field
 * Slug: kakei-advisors/home-hero
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: A framed window: the pine-green field holds the issue line, title, lead, buttons and the questions of the month; the meeting-room photo sits in a paper window frame on the right, and the cut-out olive tree breaks out over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ka-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-hero__banner"} -->
<figure class="wp-block-image size-full ka-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-room.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ka-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-hero__text"><!-- wp:paragraph {"className": "ka-issue"} -->
<p class="ka-issue"><?php echo esc_html( kakei_advisors_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ka-hero__title"} -->
<h1 class="wp-block-heading ka-hero__title"><?php echo esc_html( kakei_advisors_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-hero__lead"} -->
<p class="ka-hero__lead"><?php echo esc_html( kakei_advisors_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ka-hero__cta"} -->
<div class="wp-block-buttons ka-hero__cta"><!-- wp:button {"className": "ka-book"} -->
<div class="wp-block-button ka-book"><a class="wp-block-button__link wp-element-button" href="/meeting/"><?php echo esc_html( kakei_advisors_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kakei_advisors_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "ka-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-toc"><!-- wp:paragraph {"className": "ka-toc__label"} -->
<p class="ka-toc__label"><?php echo esc_html( kakei_advisors_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "ka-toc__list"} -->
<ol class="wp-block-list ka-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-hero__bowl"} -->
<figure class="wp-block-image size-full ka-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plant-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== kakei_advisors_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ka-tate"} -->
<p class="ka-tate"><?php echo esc_html( kakei_advisors_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
