<?php
/**
 * Title: Newsletter: sign up
 * Slug: tasuki-ekiden/letter-main
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: A sumi-ink painting beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-letter"><!-- wp:group {"align": "wide", "className": "te-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-letter__img"} -->
<figure class="wp-block-image size-full te-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/water-station.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group te-letter__card"><!-- wp:heading {"className": "te-sec__title"} -->
<h2 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "te-links"} -->
<div class="wp-block-buttons te-links"><!-- wp:button {"className": "te-mailto"} -->
<div class="wp-block-button te-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( tasuki_ekiden_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( tasuki_ekiden_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
