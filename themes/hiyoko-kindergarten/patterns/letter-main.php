<?php
/**
 * Title: Letters: sign up
 * Slug: hiyoko-kindergarten/letter-main
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-letter"><!-- wp:group {"align": "wide", "className": "hk-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-letter__img"} -->
<figure class="wp-block-image size-full hk-piece hk-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hk-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-letter__card"><!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hk-links"} -->
<div class="wp-block-buttons hk-links"><!-- wp:button {"className": "hk-mailto"} -->
<div class="wp-block-button hk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@hiyokokindergarten.example?subject=' . rawurlencode( hiyoko_kindergarten_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hiyoko_kindergarten_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
