<?php
/**
 * Title: Newsletter: sign up
 * Slug: shinayaka-pilates/letter-main
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: A breathing illustration beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-letter"><!-- wp:group {"align": "wide", "className": "sp-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sp-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-letter__img"} -->
<figure class="wp-block-image size-full sp-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breath.webp' ) ); ?>" alt="<?php echo esc_attr( shinayaka_pilates_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sp-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-letter__card"><!-- wp:heading {"className": "sp-sec__title"} -->
<h2 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sp-links"} -->
<div class="wp-block-buttons sp-links"><!-- wp:button {"className": "sp-mailto"} -->
<div class="wp-block-button sp-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shinayaka.example?subject=' . rawurlencode( shinayaka_pilates_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( shinayaka_pilates_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
