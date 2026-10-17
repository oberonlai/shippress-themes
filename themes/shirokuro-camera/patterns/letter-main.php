<?php
/**
 * Title: Newsletter: sign up
 * Slug: shirokuro-camera/letter-main
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: A clay illustration of contact sheets and prints beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-letter"><!-- wp:group {"align": "wide", "className": "sc-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-letter__img"} -->
<figure class="wp-block-image size-full sc-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-lab.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sc-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-letter__card"><!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sc-links"} -->
<div class="wp-block-buttons sc-links"><!-- wp:button {"className": "sc-mailto"} -->
<div class="wp-block-button sc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@shirokuro.example?subject=' . rawurlencode( shirokuro_camera_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( shirokuro_camera_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
