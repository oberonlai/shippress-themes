<?php
/**
 * Title: Newsletter: sign up
 * Slug: seimitsu-works/letter-main
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-letter"><!-- wp:group {"align": "wide", "className": "sw-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-piece sw-letter__img"} -->
<figure class="wp-block-image size-full sw-piece sw-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pack.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sw-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-letter__card"><!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sw-links"} -->
<div class="wp-block-buttons sw-links"><!-- wp:button {"className": "sw-mailto"} -->
<div class="wp-block-button sw-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@seimitsuworks.example?subject=' . rawurlencode( seimitsu_works_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( seimitsu_works_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
