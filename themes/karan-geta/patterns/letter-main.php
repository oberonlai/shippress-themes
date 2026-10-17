<?php
/**
 * Title: Newsletter: sign up
 * Slug: karan-geta/letter-main
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: A river-mouth photo beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-letter"><!-- wp:group {"align": "wide", "className": "kg-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-letter__img"} -->
<figure class="wp-block-image size-full kg-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-fit.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kg-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-letter__card"><!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className": "kg-mailto"} -->
<div class="wp-block-button kg-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@karan.example?subject=' . rawurlencode( karan_geta_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( karan_geta_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
