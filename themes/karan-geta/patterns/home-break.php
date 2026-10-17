<?php
/**
 * Title: Home: the sound of the street
 * Slug: karan-geta/home-break
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: One full-bleed woodblock illustration of the paulownia yard fills the band; a turquoise card holds the text and a cut-out pair of geta breaks out of the card over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-break"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-break__bg"} -->
<figure class="wp-block-image size-full kg-break__bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/paulownia.webp' ) ); ?>" alt="<?php echo esc_attr( karan_geta_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "kg-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-break__grid"><!-- wp:group {"className": "kg-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-break__text"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-break__float"} -->
<figure class="wp-block-image size-full kg-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/geta-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "kg-eyebrow kg-chip"} -->
<p class="kg-eyebrow kg-chip"><?php echo esc_html( karan_geta_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "kg-break__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-break__card"><!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kg-more"} -->
<div class="wp-block-buttons kg-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( karan_geta_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
