<?php
/**
 * Title: Newsletter: sign up
 * Slug: taiko-juku/letter-main
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: A class photograph beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-letter"><!-- wp:group {"align": "wide", "className": "tj-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-letter__img"} -->
<figure class="wp-block-image size-full tj-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tj-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-letter__card"><!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tj-links"} -->
<div class="wp-block-buttons tj-links"><!-- wp:button {"className": "tj-mailto"} -->
<div class="wp-block-button tj-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:dojo@taikojuku.example?subject=' . rawurlencode( taiko_juku_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( taiko_juku_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
