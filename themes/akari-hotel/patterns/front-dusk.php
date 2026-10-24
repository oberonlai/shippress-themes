<?php
/**
 * Title: Home: dusk room
 * Slug: akari-hotel/front-dusk
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Full-bleed guest room at dusk with slow parallax; caption at the bottom left.
 */
?>
<!-- wp:cover {"alt":"<?php echo esc_attr( akari_hotel_t( 'alt_p01' ) ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-dusk-room.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":92,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":true,"align":"full","className":"ak-dusk sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ak-dusk sp-parallax" style="min-height:92vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p01' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-dusk-room.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ak-label ak-dusk__label"} -->
<p class="ak-label ak-dusk__label"><?php echo esc_html( akari_hotel_t( 'dusk_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-dusk__p"} -->
<p class="ak-dusk__p"><?php echo esc_html( akari_hotel_t( 'dusk_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
