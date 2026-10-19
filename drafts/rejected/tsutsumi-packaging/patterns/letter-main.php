<?php
/**
 * Title: Newsletter: sign up
 * Slug: tsutsumi-packaging/letter-main
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-section tp-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-section tp-letter"><!-- wp:group {"align": "wide", "className": "tp-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tp-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tp-piece tp-letter__img"} -->
<figure class="wp-block-image size-full tp-piece tp-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/factory.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_factory' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tp-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-letter__card"><!-- wp:heading {"className": "tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsutsumi_packaging_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tp-links"} -->
<div class="wp-block-buttons tp-links"><!-- wp:button {"className": "tp-mailto"} -->
<div class="wp-block-button tp-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tsutsumipackaging.example?subject=' . rawurlencode( tsutsumi_packaging_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( tsutsumi_packaging_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
