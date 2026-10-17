<?php
/**
 * Title: Letters: sign up
 * Slug: kamisori-barber/letter-main
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: A taped paper-cut picture above the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-letter"><!-- wp:group {"align": "wide", "className": "kb-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-letter__img"} -->
<figure class="wp-block-image size-full kb-piece kb-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/street.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kb-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-letter__card"><!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kb-links"} -->
<div class="wp-block-buttons kb-links"><!-- wp:button {"className": "kb-mailto"} -->
<div class="wp-block-button kb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kamisoribarber.example?subject=' . rawurlencode( kamisori_barber_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kamisori_barber_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
