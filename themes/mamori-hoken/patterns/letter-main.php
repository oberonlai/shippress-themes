<?php
/**
 * Title: Letters: sign up
 * Slug: mamori-hoken/letter-main
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-letter"><!-- wp:group {"align": "wide", "className": "mh-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-letter__img"} -->
<figure class="wp-block-image size-full mh-piece mh-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/town.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mh-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-letter__card"><!-- wp:heading {"className": "mh-sec__title"} -->
<h2 class="wp-block-heading mh-sec__title"><?php echo esc_html( mamori_hoken_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mamori_hoken_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mh-links"} -->
<div class="wp-block-buttons mh-links"><!-- wp:button {"className": "mh-mailto"} -->
<div class="wp-block-button mh-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@mamorihoken.example?subject=' . rawurlencode( mamori_hoken_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( mamori_hoken_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
