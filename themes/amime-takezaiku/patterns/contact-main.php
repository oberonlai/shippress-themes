<?php
/**
 * Title: Visit: ask and find us
 * Slug: amime-takezaiku/contact-main
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: Ask about a made-to-size basket with an email button and the synced shop board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-contact"><!-- wp:group {"align": "wide", "className": "tk-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-contact__grid"><!-- wp:group {"className": "tk-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-contact__ask"><!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tk-links"} -->
<div class="wp-block-buttons tk-links"><!-- wp:button {"className": "tk-mailto"} -->
<div class="wp-block-button tk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@amime.example?subject=' . rawurlencode( amime_takezaiku_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( amime_takezaiku_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"amime-takezaiku/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tk-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-contact__find"><!-- wp:pattern {"slug":"amime-takezaiku/details"} /-->

<!-- wp:heading {"level": 3, "className": "tk-sec__title"} -->
<h3 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
