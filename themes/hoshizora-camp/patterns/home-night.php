<?php
/**
 * Title: Home: a night here
 * Slug: hoshizora-camp/home-night
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The night-indigo band: the fire circle in watercolour beside the evening timeline; a cut-out camp lantern hangs over the band's top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-night", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-night"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-night__lantern"} -->
<figure class="wp-block-image size-full hz-night__lantern"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lantern-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "hz-night__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-night__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-night__img"} -->
<figure class="wp-block-image size-full hz-night__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campfire.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_fire' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-night__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-night__text"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'night_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'night_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "hz-times"} -->
<ul class="wp-block-list hz-times"><!-- wp:list-item -->
<li><strong>15:00</strong> <?php echo esc_html( hoshizora_camp_t( 'n1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>18:30</strong> <?php echo esc_html( hoshizora_camp_t( 'n2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>20:30</strong> <?php echo esc_html( hoshizora_camp_t( 'n3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>05:10</strong> <?php echo esc_html( hoshizora_camp_t( 'n4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
