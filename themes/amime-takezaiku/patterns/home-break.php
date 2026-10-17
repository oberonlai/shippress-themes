<?php
/**
 * Title: Home: the grove band
 * Slug: amime-takezaiku/home-break
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: One full-bleed watercolour panorama of the bamboo grove runs across the band as a wide strip; a kariyasu yellow card holds the text, and the cut-out flower basket breaks out of the card over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-break"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-break__bg"} -->
<figure class="wp-block-image size-full tk-break__bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grove.webp' ) ); ?>" alt="<?php echo esc_attr( amime_takezaiku_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "tk-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-break__grid"><!-- wp:group {"className": "tk-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-break__text"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-break__float"} -->
<figure class="wp-block-image size-full tk-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hanakago-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "tk-eyebrow tk-chip"} -->
<p class="tk-eyebrow tk-chip"><?php echo esc_html( amime_takezaiku_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "tk-break__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-break__card"><!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tk-more"} -->
<div class="wp-block-buttons tk-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( amime_takezaiku_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
