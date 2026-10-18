<?php
/**
 * Title: Newsletter: sign up
 * Slug: kizuki-construction/letter-main
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-section kz-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-section kz-letter"><!-- wp:group {"align": "wide", "className": "kz-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kz-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kz-piece kz-letter__img"} -->
<figure class="wp-block-image size-full kz-piece kz-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pour.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_pour' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kz-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-letter__card"><!-- wp:heading {"className": "kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kizuki_construction_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kz-links"} -->
<div class="wp-block-buttons kz-links"><!-- wp:button {"className": "kz-mailto"} -->
<div class="wp-block-button kz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kizukiconstruction.example?subject=' . rawurlencode( kizuki_construction_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kizuki_construction_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
