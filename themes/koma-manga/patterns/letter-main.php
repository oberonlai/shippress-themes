<?php
/**
 * Title: Newsletter: sign up
 * Slug: koma-manga/letter-main
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: A storyboard panel beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-letter"><!-- wp:group {"align": "wide", "className": "km-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-letter__img"} -->
<figure class="wp-block-image size-full km-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/thumbnails.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "km-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group km-letter__card"><!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "km-links"} -->
<div class="wp-block-buttons km-links"><!-- wp:button {"className": "km-mailto"} -->
<div class="wp-block-button km-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@komamanga.example?subject=' . rawurlencode( koma_manga_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( koma_manga_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
