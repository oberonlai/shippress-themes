<?php
/**
 * Title: Newsletter: sign up
 * Slug: tsuribito-tackle/letter-main
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: A river-mouth photo beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-letter"><!-- wp:group {"align": "wide", "className": "tt-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-letter__img"} -->
<figure class="wp-block-image size-full tt-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-river.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tt-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-letter__card"><!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tt-links"} -->
<div class="wp-block-buttons tt-links"><!-- wp:button {"className": "tt-mailto"} -->
<div class="wp-block-button tt-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:shop@tsuribito.example?subject=' . rawurlencode( tsuribito_tackle_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( tsuribito_tackle_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
