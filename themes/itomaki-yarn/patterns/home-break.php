<?php
/**
 * Title: Home: where the wool comes from
 * Slug: itomaki-yarn/home-break
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: One full-bleed watercolour of the hill farm fills the band; a kankurenai red card holds the text and a cut-out skein breaks out of the card over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-break"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-break__bg"} -->
<figure class="wp-block-image size-full iy-break__bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hills.webp' ) ); ?>" alt="<?php echo esc_attr( itomaki_yarn_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "iy-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-break__grid"><!-- wp:group {"className": "iy-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-break__text"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-break__float"} -->
<figure class="wp-block-image size-full iy-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/skein-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "iy-eyebrow iy-chip"} -->
<p class="iy-eyebrow iy-chip"><?php echo esc_html( itomaki_yarn_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "iy-break__card", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-break__card"><!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "iy-more"} -->
<div class="wp-block-buttons iy-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( itomaki_yarn_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
