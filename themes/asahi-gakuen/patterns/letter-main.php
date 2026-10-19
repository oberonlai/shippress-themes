<?php
/**
 * Title: Newsletter: sign up
 * Slug: asahi-gakuen/letter-main
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-section ag-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-section ag-letter"><!-- wp:group {"align": "wide", "className": "ag-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ag-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ag-piece ag-letter__img"} -->
<figure class="wp-block-image size-full ag-piece ag-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campus.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_campus' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ag-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-letter__card"><!-- wp:heading {"className": "ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asahi_gakuen_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ag-links"} -->
<div class="wp-block-buttons ag-links"><!-- wp:button {"className": "ag-mailto"} -->
<div class="wp-block-button ag-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@asahigakuen.example?subject=' . rawurlencode( asahi_gakuen_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( asahi_gakuen_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
