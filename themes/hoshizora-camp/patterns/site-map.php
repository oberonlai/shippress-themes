<?php
/**
 * Title: Site map with numbered spots
 * Slug: hoshizora-camp/site-map
 * Categories: hoshizora-camp
 * Keywords: map, camp, site
 * Viewport Width: 1440
 * Description: The watercolour map of the camp in a white frame, with numbered pins for the lodge, tents, domes, star deck, fire circle and creek.
 */
?>
<!-- wp:group {"className": "hz-map", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-map"><!-- wp:paragraph {"className": "hz-map__label"} -->
<p class="hz-map__label"><?php echo esc_html( hoshizora_camp_t( 'map_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-map__img"} -->
<figure class="wp-block-image size-full hz-map__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/map.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'map_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:list {"ordered": true, "className": "hz-pins"} -->
<ol class="wp-block-list hz-pins"><!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot4' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot5' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'spot6' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->
