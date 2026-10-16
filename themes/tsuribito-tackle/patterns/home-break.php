<?php
/**
 * Title: Home: tested on the breakwater
 * Slug: tsuribito-tackle/home-break
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: A full crimson band: the bright shop photo with the cut-out red float breaking out of its frame and over the band's top edge, beside the shop's promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-break", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-break"><!-- wp:group {"align": "wide", "className": "tt-break__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-break__grid"><!-- wp:group {"className": "tt-break__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-break__photo"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-break__img"} -->
<figure class="wp-block-image size-full tt-break__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-counter.webp' ) ); ?>" alt="<?php echo esc_attr( tsuribito_tackle_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-break__float"} -->
<figure class="wp-block-image size-full tt-break__float"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/float-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tt-break__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-break__text"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'break_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'break_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'break_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tt-more"} -->
<div class="wp-block-buttons tt-more"><!-- wp:button {"className": "is-style-outline-light"} -->
<div class="wp-block-button is-style-outline-light"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( tsuribito_tackle_t( 'break_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
