<?php
/**
 * Title: Home: the sweets calendar band
 * Slug: kanmi-dokoro/home-serial
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: A split band: deep ink beside kikyo, twelve months in giant type, the note and a framed watercolour; the cut-out matcha bowl breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-serial", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-serial"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow"><?php echo esc_html( kanmi_dokoro_t( 'serial_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align": "wide", "className": "kd-serial__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-serial__grid"><!-- wp:paragraph {"className": "kd-serial__no"} -->
<p class="kd-serial__no"><?php echo esc_html( kanmi_dokoro_t( 'serial_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "kd-serial__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-serial__text"><!-- wp:heading {"className": "kd-sec__title"} -->
<h2 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'serial_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'serial_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kd-more"} -->
<div class="wp-block-buttons kd-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu/"><?php echo esc_html( kanmi_dokoro_t( 'serial_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-serial__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-serial__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-serial__img"} -->
<figure class="wp-block-image size-full kd-serial__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pattern.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_pattern' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-serial__pen"} -->
<figure class="wp-block-image size-full kd-serial__pen"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/chawan-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
