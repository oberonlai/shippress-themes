<?php
/**
 * Title: Home: why it takes three months
 * Slug: urushi-nuri/home-break
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: A full seiheki band: the framed drying-cabinet drawing with the cut-out jubako breaking out of its frame and over the band top edge, beside a large white title and a white card with the text.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-break"><!-- wp:group {"align": "wide", "className": "un-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-break__grid"><!-- wp:group {"className": "un-break__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group un-break__photo"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-break__img"} -->
<figure class="wp-block-image size-full un-break__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drying-room.webp' ) ); ?>" alt="<?php echo esc_attr( urushi_nuri_t( 'alt_drying' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-break__float"} -->
<figure class="wp-block-image size-full un-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/jubako-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group un-break__text"><!-- wp:paragraph {"className": "un-eyebrow un-chip"} -->
<p class="un-eyebrow un-chip"><?php echo esc_html( urushi_nuri_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "un-break__card", "layout": {"type": "default"}} -->
<div class="wp-block-group un-break__card"><!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "un-more"} -->
<div class="wp-block-buttons un-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( urushi_nuri_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
