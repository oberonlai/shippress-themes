<?php
/**
 * Title: Newsletter: sign up
 * Slug: urushi-nuri/letter-main
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: A river-mouth photo beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-letter"><!-- wp:group {"align": "wide", "className": "un-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-letter__img"} -->
<figure class="wp-block-image size-full un-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-market.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "un-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group un-letter__card"><!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "un-links"} -->
<div class="wp-block-buttons un-links"><!-- wp:button {"className": "un-mailto"} -->
<div class="wp-block-button un-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@urushinuri.example?subject=' . rawurlencode( urushi_nuri_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( urushi_nuri_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
