<?php
/**
 * Title: Home: one evening class
 * Slug: taiko-juku/home-night
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: The sumi-night band: sticks and cloth on the dojo floor beside the class timeline; a cut-out drum breaks over the band's top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-night", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-night"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-night__drum"} -->
<figure class="wp-block-image size-full tj-night__drum"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drum-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "tj-night__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-night__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-night__img"} -->
<figure class="wp-block-image size-full tj-night__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bachi.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tj-night__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-night__text"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'night_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'night_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "tj-times"} -->
<ul class="wp-block-list tj-times"><!-- wp:list-item -->
<li><strong>19:00</strong> <?php echo esc_html( taiko_juku_t( 'n1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>19:15</strong> <?php echo esc_html( taiko_juku_t( 'n2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>19:45</strong> <?php echo esc_html( taiko_juku_t( 'n3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>20:20</strong> <?php echo esc_html( taiko_juku_t( 'n4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
