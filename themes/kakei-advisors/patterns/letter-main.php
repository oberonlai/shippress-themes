<?php
/**
 * Title: Newsletter: sign up
 * Slug: kakei-advisors/letter-main
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-letter"><!-- wp:group {"align": "wide", "className": "ka-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-letter__img"} -->
<figure class="wp-block-image size-full ka-piece ka-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-retire.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ka-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-letter__card"><!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ka-links"} -->
<div class="wp-block-buttons ka-links"><!-- wp:button {"className": "ka-mailto"} -->
<div class="wp-block-button ka-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kakeiadvisors.example?subject=' . rawurlencode( kakei_advisors_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kakei_advisors_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
