<?php
/**
 * Title: Newsletter: sign up
 * Slug: ichiba-monozukuri/letter-main
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: A risograph print beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-letter"><!-- wp:group {"align": "wide", "className": "im-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-letter__img"} -->
<figure class="wp-block-image size-full im-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/baskets.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_baskets' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "im-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group im-letter__card"><!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "im-links"} -->
<div class="wp-block-buttons im-links"><!-- wp:button {"className": "im-mailto"} -->
<div class="wp-block-button im-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@ichiba-monozukuri.example?subject=' . rawurlencode( ichiba_monozukuri_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( ichiba_monozukuri_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
