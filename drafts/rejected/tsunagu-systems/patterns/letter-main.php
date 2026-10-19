<?php
/**
 * Title: Newsletter: sign up
 * Slug: tsunagu-systems/letter-main
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-section ts-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-letter"><!-- wp:group {"align": "wide", "className": "ts-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ts-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ts-piece ts-letter__img"} -->
<figure class="wp-block-image size-full ts-piece ts-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-setup.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ts-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-letter__card"><!-- wp:heading {"className": "ts-sec__title"} -->
<h2 class="wp-block-heading ts-sec__title"><?php echo esc_html( tsunagu_systems_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsunagu_systems_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ts-links"} -->
<div class="wp-block-buttons ts-links"><!-- wp:button {"className": "ts-mailto"} -->
<div class="wp-block-button ts-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tsunagusystems.example?subject=' . rawurlencode( tsunagu_systems_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( tsunagu_systems_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
