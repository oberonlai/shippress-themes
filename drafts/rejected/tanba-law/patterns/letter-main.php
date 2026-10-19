<?php
/**
 * Title: Newsletter: sign up
 * Slug: tanba-law/letter-main
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-section tb-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-section tb-letter"><!-- wp:group {"align": "wide", "className": "tb-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tb-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tb-piece tb-letter__img"} -->
<figure class="wp-block-image size-full tb-piece tb-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_meeting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tb-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-letter__card"><!-- wp:heading {"className": "tb-sec__title"} -->
<h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tanba_law_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tb-links"} -->
<div class="wp-block-buttons tb-links"><!-- wp:button {"className": "tb-mailto"} -->
<div class="wp-block-button tb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tanbalaw.example?subject=' . rawurlencode( tanba_law_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( tanba_law_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
