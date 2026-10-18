<?php
/**
 * Title: Newsletter: sign up
 * Slug: hirameki-lab/letter-main
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-section hl-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-section hl-letter"><!-- wp:group {"align": "wide", "className": "hl-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hl-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hl-piece hl-letter__img"} -->
<figure class="wp-block-image size-full hl-piece hl-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bench.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_bench' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hl-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-letter__card"><!-- wp:heading {"className": "hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hirameki_lab_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hl-links"} -->
<div class="wp-block-buttons hl-links"><!-- wp:button {"className": "hl-mailto"} -->
<div class="wp-block-button hl-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hiramekilab.example?subject=' . rawurlencode( hirameki_lab_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hirameki_lab_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
