<?php
/**
 * Title: Home: close
 * Slug: mahora-foods/front-close
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Centred head, wide team photo, flat button and phone line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mf-sec mf-close", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mf-sec mf-close"><!-- wp:group {"className": "mf-sec__in", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sec__in"><!-- wp:group {"className": "mf-sechead sp-reveal sp-reveal--up", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-sechead sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign": "center", "className": "mf-h2"} -->
<h2 class="wp-block-heading has-text-align-center mf-h2"><?php echo esc_html( mahora_foods_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script", "align": "center"} -->
<p class="has-text-align-center mf-script"><?php echo esc_html( mahora_foods_t( 'cl_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-lead", "align": "center"} -->
<p class="has-text-align-center mf-lead"><?php echo esc_html( mahora_foods_t( 'cl_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-close__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-close__photo"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m17.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m17' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "mf-btn"} -->
<div class="wp-block-button mf-btn"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( mahora_foods_t( 'cl_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className": "mf-closeline"} -->
<p class="mf-closeline"><?php echo esc_html( mahora_foods_t( 'cl_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
