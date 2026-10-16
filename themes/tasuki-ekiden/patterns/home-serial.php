<?php
/**
 * Title: Home: the sash band
 * Slug: tasuki-ekiden/home-serial
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: Ink beside konpeki, 42 in giant type, the note and a framed sumi-ink painting; the cut-out sash breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-serial", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-serial"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow"><?php echo esc_html( tasuki_ekiden_t( 'serial_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align": "wide", "className": "te-serial__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-serial__grid"><!-- wp:paragraph {"className": "te-serial__no"} -->
<p class="te-serial__no"><?php echo esc_html( tasuki_ekiden_t( 'serial_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "te-serial__text", "layout": {"type": "default"}} -->
<div class="wp-block-group te-serial__text"><!-- wp:heading {"className": "te-sec__title"} -->
<h2 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'serial_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'serial_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "te-more"} -->
<div class="wp-block-buttons te-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/course/"><?php echo esc_html( tasuki_ekiden_t( 'serial_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-serial__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group te-serial__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-serial__img"} -->
<figure class="wp-block-image size-full te-serial__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pattern.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_pattern' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-serial__pen"} -->
<figure class="wp-block-image size-full te-serial__pen"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sash-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
