<?php
/**
 * Title: Letters: sign up
 * Slug: hotaru-ehon/letter-main
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: A taped flat 2D picture above the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-letter"><!-- wp:group {"align": "wide", "className": "ht-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-letter__img"} -->
<figure class="wp-block-image size-full ht-piece ht-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/river.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ht-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-letter__card"><!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ht-links"} -->
<div class="wp-block-buttons ht-links"><!-- wp:button {"className": "ht-mailto"} -->
<div class="wp-block-button ht-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@hotaruehon.example?subject=' . rawurlencode( hotaru_ehon_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hotaru_ehon_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
