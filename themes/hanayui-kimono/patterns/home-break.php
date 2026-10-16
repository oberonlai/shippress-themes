<?php
/**
 * Title: Home: the collage of a day
 * Slug: hanayui-kimono/home-break
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: A full crimson band with a collage of four woodblock prints pasted at angles (silks, the dressing room, the shop front, the canal bridge); the cut-out crimson umbrella breaks out of the collage and over the band top edge; a white card holds the text.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-break"><!-- wp:group {"align": "wide", "className": "hy-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-break__grid"><!-- wp:group {"className": "hy-collage", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-collage__a"} -->
<figure class="wp-block-image size-full hy-collage__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fabrics.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_drying' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-collage__b"} -->
<figure class="wp-block-image size-full hy-collage__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-collage__c"} -->
<figure class="wp-block-image size-full hy-collage__c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-break__float"} -->
<figure class="wp-block-image size-full hy-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wagasa-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-break__text"><!-- wp:paragraph {"className": "hy-eyebrow hy-chip"} -->
<p class="hy-eyebrow hy-chip"><?php echo esc_html( hanayui_kimono_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className": "hy-break__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-break__card"><!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hy-more"} -->
<div class="wp-block-buttons hy-more"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( hanayui_kimono_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
