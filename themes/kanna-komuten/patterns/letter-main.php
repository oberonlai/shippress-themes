<?php
/**
 * Title: Letters: sign up
 * Slug: kanna-komuten/letter-main
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: A photograph beside the ink sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-letter"><!-- wp:group {"align": "wide", "className": "kn-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-letter__img"} -->
<figure class="wp-block-image size-full kn-piece kn-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/joinery.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kn-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-letter__card"><!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kn-links"} -->
<div class="wp-block-buttons kn-links"><!-- wp:button {"className": "kn-mailto"} -->
<div class="wp-block-button kn-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:workshop@kannakomuten.example?subject=' . rawurlencode( kanna_komuten_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kanna_komuten_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
