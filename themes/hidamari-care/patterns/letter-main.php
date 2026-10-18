<?php
/**
 * Title: Newsletter: sign up
 * Slug: hidamari-care/letter-main
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-section hc-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-section hc-letter"><!-- wp:group {"align": "wide", "className": "hc-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hc-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hc-piece hc-letter__img"} -->
<figure class="wp-block-image size-full hc-piece hc-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lunch.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_lunch' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hc-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-letter__card"><!-- wp:heading {"className": "hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hc-links"} -->
<div class="wp-block-buttons hc-links"><!-- wp:button {"className": "hc-mailto"} -->
<div class="wp-block-button hc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hidamaricare.example?subject=' . rawurlencode( hidamari_care_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hidamari_care_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
