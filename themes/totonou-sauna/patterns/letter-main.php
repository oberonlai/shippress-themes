<?php
/**
 * Title: Letters: sign up
 * Slug: totonou-sauna/letter-main
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: A photograph beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-letter"><!-- wp:group {"align": "wide", "className": "tn-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-letter__img"} -->
<figure class="wp-block-image size-full tn-piece tn-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tn-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-letter__card"><!-- wp:heading {"className": "tn-sec__title"} -->
<h2 class="wp-block-heading tn-sec__title"><?php echo esc_html( totonou_sauna_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( totonou_sauna_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tn-links"} -->
<div class="wp-block-buttons tn-links"><!-- wp:button {"className": "tn-mailto"} -->
<div class="wp-block-button tn-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@totonousauna.example?subject=' . rawurlencode( totonou_sauna_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( totonou_sauna_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
