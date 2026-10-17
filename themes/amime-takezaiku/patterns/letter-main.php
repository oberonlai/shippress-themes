<?php
/**
 * Title: Newsletter: sign up
 * Slug: amime-takezaiku/letter-main
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: A watercolour of drying bamboo strips beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-letter"><!-- wp:group {"align": "wide", "className": "tk-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-letter__img"} -->
<figure class="wp-block-image size-full tk-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-strips.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tk-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-letter__card"><!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tk-links"} -->
<div class="wp-block-buttons tk-links"><!-- wp:button {"className": "tk-mailto"} -->
<div class="wp-block-button tk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@amime.example?subject=' . rawurlencode( amime_takezaiku_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( amime_takezaiku_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
