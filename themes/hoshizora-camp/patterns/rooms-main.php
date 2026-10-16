<?php
/**
 * Title: Tents & domes: the four stays
 * Slug: hoshizora-camp/rooms-main
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: Each stay as a watercolour beside its text and facts, then the synced rates and what is in every tent.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-rooms", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-rooms"><!-- wp:group {"align": "wide", "className": "hz-rooms__list", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-rooms__list"><!-- wp:group {"className": "hz-room hz-room--bell", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room hz-room--bell"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-room__img"} -->
<figure class="wp-block-image size-full hz-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/belltent.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-room__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room__text"><!-- wp:heading {"className": "hz-room__title"} -->
<h2 class="wp-block-heading hz-room__title"><?php echo esc_html( hoshizora_camp_t( 'bell_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'bell_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'bell_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-room hz-room--dome", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room hz-room--dome"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-room__img"} -->
<figure class="wp-block-image size-full hz-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dome.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-room__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room__text"><!-- wp:heading {"className": "hz-room__title"} -->
<h2 class="wp-block-heading hz-room__title"><?php echo esc_html( hoshizora_camp_t( 'dome_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'dome_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'dome_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-room hz-room--family", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room hz-room--family"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-room__img"} -->
<figure class="wp-block-image size-full hz-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campfire.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_fire' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-room__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room__text"><!-- wp:heading {"className": "hz-room__title"} -->
<h2 class="wp-block-heading hz-room__title"><?php echo esc_html( hoshizora_camp_t( 'family_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'family_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'family_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-room hz-room--pitch", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room hz-room--pitch"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-room__img"} -->
<figure class="wp-block-image size-full hz-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meadow.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_meadow' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-room__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-room__text"><!-- wp:heading {"className": "hz-room__title"} -->
<h2 class="wp-block-heading hz-room__title"><?php echo esc_html( hoshizora_camp_t( 'pitch_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'pitch_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'pitch_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hz-rooms__extra", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-rooms__extra"><!-- wp:pattern {"slug":"hoshizora-camp/rates"} /-->

<!-- wp:group {"className": "hz-every", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-every"><!-- wp:heading {"level": 3, "className": "hz-sec__title"} -->
<h3 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'every_tent' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'e1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'e2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'e3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'e4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
