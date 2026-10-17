<?php
/**
 * Title: Visit: ask and find us
 * Slug: shirokuro-camera/contact-main
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: Ask us to find a camera with an email button and the synced counter board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-contact"><!-- wp:group {"align": "wide", "className": "sc-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-contact__grid"><!-- wp:group {"className": "sc-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-contact__ask"><!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sc-links"} -->
<div class="wp-block-buttons sc-links"><!-- wp:button {"className": "sc-mailto"} -->
<div class="wp-block-button sc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@shirokuro.example?subject=' . rawurlencode( shirokuro_camera_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( shirokuro_camera_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"shirokuro-camera/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-contact__find"><!-- wp:pattern {"slug":"shirokuro-camera/details"} /-->

<!-- wp:heading {"level": 3, "className": "sc-sec__title"} -->
<h3 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
