<?php
/**
 * Title: Home: the workshop as a scene map
 * Slug: urushi-nuri/home-hero
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: A seiheki blue-green field holding the shop line and a white card, beside an isometric map of the workshop with five numbered pins and a legend; the cut-out vermilion bowl breaks out of the map frame and the cut-out jubako breaks over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull un-hero"><!-- wp:group {"className": "un-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group un-hero__type"><!-- wp:paragraph {"className": "un-eyebrow un-chip"} -->
<p class="un-eyebrow un-chip"><?php echo esc_html( urushi_nuri_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "un-hero__title"} -->
<h1 class="wp-block-heading un-hero__title"><?php echo esc_html( urushi_nuri_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className": "un-hero__card", "layout": {"type": "default"}} -->
<div class="wp-block-group un-hero__card"><!-- wp:paragraph {"className": "un-hero__lead"} -->
<p class="un-hero__lead"><?php echo esc_html( urushi_nuri_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "un-hero__cta"} -->
<div class="wp-block-buttons un-hero__cta"><!-- wp:button {"className": "un-book"} -->
<div class="wp-block-button un-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( urushi_nuri_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/workshop-notes/"><?php echo esc_html( urushi_nuri_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php if ( '' !== urushi_nuri_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "un-tate"} -->
<p class="un-tate"><?php echo esc_html( urushi_nuri_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "un-map", "layout": {"type": "default"}} -->
<div class="wp-block-group un-map"><!-- wp:group {"className": "un-map__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group un-map__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-map__img"} -->
<figure class="wp-block-image size-full un-map__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-map.webp' ) ); ?>" alt="<?php echo esc_attr( urushi_nuri_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "un-pin un-pin--1", "layout": {"type": "default"}} -->
<div class="wp-block-group un-pin un-pin--1"><!-- wp:paragraph {"className": "un-pin__label"} -->
<p class="un-pin__label"><?php echo esc_html( urushi_nuri_t( 'pin1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-pin un-pin--2", "layout": {"type": "default"}} -->
<div class="wp-block-group un-pin un-pin--2"><!-- wp:paragraph {"className": "un-pin__label"} -->
<p class="un-pin__label"><?php echo esc_html( urushi_nuri_t( 'pin2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-pin un-pin--3", "layout": {"type": "default"}} -->
<div class="wp-block-group un-pin un-pin--3"><!-- wp:paragraph {"className": "un-pin__label"} -->
<p class="un-pin__label"><?php echo esc_html( urushi_nuri_t( 'pin3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-pin un-pin--4", "layout": {"type": "default"}} -->
<div class="wp-block-group un-pin un-pin--4"><!-- wp:paragraph {"className": "un-pin__label"} -->
<p class="un-pin__label"><?php echo esc_html( urushi_nuri_t( 'pin4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-pin un-pin--5", "layout": {"type": "default"}} -->
<div class="wp-block-group un-pin un-pin--5"><!-- wp:paragraph {"className": "un-pin__label"} -->
<p class="un-pin__label"><?php echo esc_html( urushi_nuri_t( 'pin5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-map__legend", "layout": {"type": "default"}} -->
<div class="wp-block-group un-map__legend"><!-- wp:paragraph {"className": "un-map__label"} -->
<p class="un-map__label"><?php echo esc_html( urushi_nuri_t( 'map_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "un-legend"} -->
<ol class="wp-block-list un-legend"><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pin1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pin2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pin3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pin4' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pin5' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-hero__bowl"} -->
<figure class="wp-block-image size-full un-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-hero__jubako"} -->
<figure class="wp-block-image size-full un-hero__jubako"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/jubako-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
