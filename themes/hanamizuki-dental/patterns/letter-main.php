<?php
/**
 * Title: Newsletter: sign up
 * Slug: hanamizuki-dental/letter-main
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-section hd-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-letter"><!-- wp:group {"align": "wide", "className": "hd-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hd-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hd-piece hd-letter__img"} -->
<figure class="wp-block-image size-full hd-piece hd-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.webp' ) ); ?>" alt="<?php echo esc_attr( hanamizuki_dental_t( 'alt_waiting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hd-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-letter__card"><!-- wp:heading {"className": "hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanamizuki_dental_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hd-links"} -->
<div class="wp-block-buttons hd-links"><!-- wp:button {"className": "hd-mailto"} -->
<div class="wp-block-button hd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hanamizukidental.example?subject=' . rawurlencode( hanamizuki_dental_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hanamizuki_dental_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
