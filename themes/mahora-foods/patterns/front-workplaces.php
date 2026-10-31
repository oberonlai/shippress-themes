<?php
/**
 * Title: Home: workplaces tiles
 * Slug: mahora-foods/front-workplaces
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Four abutting photo tiles with overlapping white label tabs over an orange wedge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mf-sec mf-workplaces", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mf-sec mf-workplaces"><!-- wp:html -->
<div class="mf-wedge" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className": "mf-sec__in", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sec__in"><!-- wp:group {"className": "mf-sechead sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sechead sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign": "center", "className": "mf-h2"} -->
<h2 class="wp-block-heading has-text-align-center mf-h2"><?php echo esc_html( mahora_foods_t( 'wp_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script", "align": "center"} -->
<p class="has-text-align-center mf-script"><?php echo esc_html( mahora_foods_t( 'wp_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-lead", "align": "center"} -->
<p class="has-text-align-center mf-lead"><?php echo esc_html( mahora_foods_t( 'wp_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-tiles sp-stagger", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tiles sp-stagger"><!-- wp:group {"className": "mf-tile sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug": "full", "linkDestination": "custom"} -->
<figure class="wp-block-image size-full"><a href="/workplaces/#offices"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m05.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m05' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab"} -->
<p class="mf-tab"><a href="/workplaces/#offices"><?php echo esc_html( mahora_foods_t( 't_offices' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-tile sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug": "full", "linkDestination": "custom"} -->
<figure class="wp-block-image size-full"><a href="/workplaces/#factories"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m06.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m06' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab"} -->
<p class="mf-tab"><a href="/workplaces/#factories"><?php echo esc_html( mahora_foods_t( 't_factories' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-tile sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug": "full", "linkDestination": "custom"} -->
<figure class="wp-block-image size-full"><a href="/workplaces/#campuses"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m07.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m07' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab"} -->
<p class="mf-tab"><a href="/workplaces/#campuses"><?php echo esc_html( mahora_foods_t( 't_campuses' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-tile sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug": "full", "linkDestination": "custom"} -->
<figure class="wp-block-image size-full"><a href="/workplaces/#depots"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m08.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m08' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab"} -->
<p class="mf-tab"><a href="/workplaces/#depots"><?php echo esc_html( mahora_foods_t( 't_depots' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-tilenotes", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-tilenotes"><!-- wp:paragraph {"className": "mf-tilenote"} -->
<p class="mf-tilenote"><?php echo esc_html( mahora_foods_t( 'ts_offices' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-tilenote"} -->
<p class="mf-tilenote"><?php echo esc_html( mahora_foods_t( 'ts_factories' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-tilenote"} -->
<p class="mf-tilenote"><?php echo esc_html( mahora_foods_t( 'ts_campuses' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-tilenote"} -->
<p class="mf-tilenote"><?php echo esc_html( mahora_foods_t( 'ts_depots' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "mf-more"} -->
<p class="mf-more"><a href="/workplaces/"><?php echo esc_html( mahora_foods_t( 'wp_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
