<?php
/**
 * Title: Home: a split screen with the course grid
 * Slug: manabi-juku/home-hero
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: A split screen: the suou crimson half with a grid-paper texture holds the issue line, title, lead, buttons and last spring's results; the paper half holds a grid of four course tiles, and the cut-out stack of books breaks over the seam and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mj-hero"><!-- wp:group {"className": "mj-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-hero__text"><!-- wp:paragraph {"className": "mj-issue"} -->
<p class="mj-issue"><?php echo esc_html( manabi_juku_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mj-hero__title"} -->
<h1 class="wp-block-heading mj-hero__title"><?php echo esc_html( manabi_juku_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-hero__lead"} -->
<p class="mj-hero__lead"><?php echo esc_html( manabi_juku_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mj-hero__cta"} -->
<div class="wp-block-buttons mj-hero__cta"><!-- wp:button {"className": "mj-book"} -->
<div class="wp-block-button mj-book"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( manabi_juku_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/courses/"><?php echo esc_html( manabi_juku_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "mj-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-toc"><!-- wp:paragraph {"className": "mj-toc__label"} -->
<p class="mj-toc__label"><?php echo esc_html( manabi_juku_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "mj-toc__list"} -->
<ol class="wp-block-list mj-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-tiles", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-tiles"><!-- wp:group {"className": "mj-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-tile"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-tile__img"} -->
<figure class="wp-block-image size-full mj-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/study-desk.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-tile__title"} -->
<h3 class="wp-block-heading mj-tile__title"><?php echo esc_html( manabi_juku_t( 'tile1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-tile__meta"} -->
<p class="mj-tile__meta"><?php echo esc_html( manabi_juku_t( 'tile1_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-tile"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-tile__img"} -->
<figure class="wp-block-image size-full mj-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/library.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_review' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-tile__title"} -->
<h3 class="wp-block-heading mj-tile__title"><?php echo esc_html( manabi_juku_t( 'tile2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-tile__meta"} -->
<p class="mj-tile__meta"><?php echo esc_html( manabi_juku_t( 'tile2_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-tile"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-tile__img"} -->
<figure class="wp-block-image size-full mj-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-tile__title"} -->
<h3 class="wp-block-heading mj-tile__title"><?php echo esc_html( manabi_juku_t( 'tile3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-tile__meta"} -->
<p class="mj-tile__meta"><?php echo esc_html( manabi_juku_t( 'tile3_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-tile"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-tile__img"} -->
<figure class="wp-block-image size-full mj-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/classroom.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-tile__title"} -->
<h3 class="wp-block-heading mj-tile__title"><?php echo esc_html( manabi_juku_t( 'tile4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-tile__meta"} -->
<p class="mj-tile__meta"><?php echo esc_html( manabi_juku_t( 'tile4_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-hero__bowl"} -->
<figure class="wp-block-image size-full mj-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/books-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== manabi_juku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mj-tate"} -->
<p class="mj-tate"><?php echo esc_html( manabi_juku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
