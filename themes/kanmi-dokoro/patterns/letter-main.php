<?php
/**
 * Title: Newsletter: sign up
 * Slug: kanmi-dokoro/letter-main
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: A tea room watercolour beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-letter"><!-- wp:group {"align": "wide", "className": "kd-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-letter__img"} -->
<figure class="wp-block-image size-full kd-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-room.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kd-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-letter__card"><!-- wp:heading {"className": "kd-sec__title"} -->
<h2 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kd-links"} -->
<div class="wp-block-buttons kd-links"><!-- wp:button {"className": "kd-mailto"} -->
<div class="wp-block-button kd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( kanmi_dokoro_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kanmi_dokoro_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
