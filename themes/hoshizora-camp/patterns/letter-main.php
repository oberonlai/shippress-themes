<?php
/**
 * Title: Star letter: sign up
 * Slug: hoshizora-camp/letter-main
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The clear-roof dome under the Milky Way beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-letter"><!-- wp:group {"align": "wide", "className": "hz-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-letter__img"} -->
<figure class="wp-block-image size-full hz-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dome.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-letter__card"><!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hz-links"} -->
<div class="wp-block-buttons hz-links"><!-- wp:button {"className": "hz-mailto"} -->
<div class="wp-block-button hz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@hoshizora.example?subject=' . rawurlencode( hoshizora_camp_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hoshizora_camp_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
