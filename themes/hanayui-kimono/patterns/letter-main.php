<?php
/**
 * Title: Newsletter: sign up
 * Slug: hanayui-kimono/letter-main
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: A river-mouth photo beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-letter"><!-- wp:group {"align": "wide", "className": "hy-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-letter__img"} -->
<figure class="wp-block-image size-full hy-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-tea.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hy-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-letter__card"><!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hy-links"} -->
<div class="wp-block-buttons hy-links"><!-- wp:button {"className": "hy-mailto"} -->
<div class="wp-block-button hy-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hanayui.example?subject=' . rawurlencode( hanayui_kimono_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hanayui_kimono_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
