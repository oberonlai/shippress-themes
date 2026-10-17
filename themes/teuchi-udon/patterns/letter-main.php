<?php
/**
 * Title: Letters: sign up
 * Slug: teuchi-udon/letter-main
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: A pencil sketch beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-letter"><!-- wp:group {"align": "wide", "className": "tu-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-letter__img"} -->
<figure class="wp-block-image size-full tu-piece tu-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wheat-field.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tu-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-letter__card"><!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tu-links"} -->
<div class="wp-block-buttons tu-links"><!-- wp:button {"className": "tu-mailto"} -->
<div class="wp-block-button tu-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@teuchiudon.example?subject=' . rawurlencode( teuchi_udon_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( teuchi_udon_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
