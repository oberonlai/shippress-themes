<?php
/**
 * Title: Home: the tax calendar band
 * Slug: soroban-kaikei/home-serial
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: A split band: deep ink beside charcoal, twelve months in giant type, the note and a framed flat illustration; the cut-out seal stamp breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-serial", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-serial"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'serial_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align": "wide", "className": "sk-serial__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-serial__grid"><!-- wp:paragraph {"className": "sk-serial__no"} -->
<p class="sk-serial__no"><?php echo esc_html( soroban_kaikei_t( 'serial_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "sk-serial__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-serial__text"><!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'serial_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'serial_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sk-more"} -->
<div class="wp-block-buttons sk-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( soroban_kaikei_t( 'serial_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-serial__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-serial__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-serial__img"} -->
<figure class="wp-block-image size-full sk-serial__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pattern.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_pattern' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-serial__pen"} -->
<figure class="wp-block-image size-full sk-serial__pen"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/seal-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
