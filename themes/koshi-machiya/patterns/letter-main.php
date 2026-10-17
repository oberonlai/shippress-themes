<?php
/**
 * Title: Letters: sign up
 * Slug: koshi-machiya/letter-main
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: A taped sketch beside the ink sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-letter"><!-- wp:group {"align": "wide", "className": "kc-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-letter__img"} -->
<figure class="wp-block-image size-full kc-piece kc-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/canal.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kc-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-letter__card"><!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kc-links"} -->
<div class="wp-block-buttons kc-links"><!-- wp:button {"className": "kc-mailto"} -->
<div class="wp-block-button kc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@koshimachiya.example?subject=' . rawurlencode( koshi_machiya_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( koshi_machiya_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
