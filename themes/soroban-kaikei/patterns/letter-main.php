<?php
/**
 * Title: Newsletter: sign up
 * Slug: soroban-kaikei/letter-main
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: A tea room flat illustration beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-letter"><!-- wp:group {"align": "wide", "className": "sk-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-letter__img"} -->
<figure class="wp-block-image size-full sk-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/consult-table.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-letter__card"><!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sk-links"} -->
<div class="wp-block-buttons sk-links"><!-- wp:button {"className": "sk-mailto"} -->
<div class="wp-block-button sk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( soroban_kaikei_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( soroban_kaikei_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
