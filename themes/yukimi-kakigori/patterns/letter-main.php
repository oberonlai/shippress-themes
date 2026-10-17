<?php
/**
 * Title: Letters: sign up
 * Slug: yukimi-kakigori/letter-main
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: A paper-cut picture beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-letter"><!-- wp:group {"align": "wide", "className": "yk-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-letter__img"} -->
<figure class="wp-block-image size-full yk-piece yk-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "yk-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-letter__card"><!-- wp:heading {"className": "yk-sec__title"} -->
<h2 class="wp-block-heading yk-sec__title"><?php echo esc_html( yukimi_kakigori_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukimi_kakigori_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "yk-links"} -->
<div class="wp-block-buttons yk-links"><!-- wp:button {"className": "yk-mailto"} -->
<div class="wp-block-button yk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@yukimikakigori.example?subject=' . rawurlencode( yukimi_kakigori_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( yukimi_kakigori_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
