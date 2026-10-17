<?php
/**
 * Title: Home: the darkroom collage
 * Slug: shirokuro-camera/home-break
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: An asymmetric masonry collage: the clay darkroom picture as a large tile, a mikan card with the lab text that the cut-out film roll breaks out of, and a black tile with what the shop sells.
 */
?>

<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-break"><!-- wp:group {"align": "wide", "className": "sc-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-break__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-break__photo"} -->
<figure class="wp-block-image size-full sc-break__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/darkroom.webp' ) ); ?>" alt="<?php echo esc_attr( shirokuro_camera_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sc-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-break__text"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-break__float"} -->
<figure class="wp-block-image size-full sc-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/roll-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "sc-eyebrow sc-chip"} -->
<p class="sc-eyebrow sc-chip"><?php echo esc_html( shirokuro_camera_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sc-more"} -->
<div class="wp-block-buttons sc-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( shirokuro_camera_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-break__trio", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-break__trio"><!-- wp:paragraph {"className": "sc-trio__k"} -->
<p class="sc-trio__k"><?php echo esc_html( shirokuro_camera_t( 'c1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-trio__v"} -->
<p class="sc-trio__v"><?php echo esc_html( shirokuro_camera_t( 'c1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-trio__k"} -->
<p class="sc-trio__k"><?php echo esc_html( shirokuro_camera_t( 'c2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-trio__v"} -->
<p class="sc-trio__v"><?php echo esc_html( shirokuro_camera_t( 'c2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-trio__k"} -->
<p class="sc-trio__k"><?php echo esc_html( shirokuro_camera_t( 'c3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-trio__v"} -->
<p class="sc-trio__v"><?php echo esc_html( shirokuro_camera_t( 'c3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
