<?php
/**
 * Title: Letters: sign up
 * Slug: fukusa-chado/letter-main
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: A clay picture card beside the dark green sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-letter"><!-- wp:group {"align": "wide", "className": "fc-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-letter__img"} -->
<figure class="wp-block-image size-full fc-piece fc-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sweets.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "fc-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-letter__card"><!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( fukusa_chado_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "fc-links"} -->
<div class="wp-block-buttons fc-links"><!-- wp:button {"className": "fc-mailto"} -->
<div class="wp-block-button fc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:lessons@fukusachado.example?subject=' . rawurlencode( fukusa_chado_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( fukusa_chado_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
