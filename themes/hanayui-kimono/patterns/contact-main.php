<?php
/**
 * Title: Visit: ask and find us
 * Slug: hanayui-kimono/contact-main
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: Ask about a group with an email button and the synced shop board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-contact"><!-- wp:group {"align": "wide", "className": "hy-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-contact__grid"><!-- wp:group {"className": "hy-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-contact__ask"><!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hy-links"} -->
<div class="wp-block-buttons hy-links"><!-- wp:button {"className": "hy-mailto"} -->
<div class="wp-block-button hy-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hanayui.example?subject=' . rawurlencode( hanayui_kimono_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( hanayui_kimono_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hanayui-kimono/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-contact__find"><!-- wp:pattern {"slug":"hanayui-kimono/details"} /-->

<!-- wp:heading {"level": 3, "className": "hy-sec__title"} -->
<h3 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
