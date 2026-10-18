<?php
/**
 * Title: Letters: sign up
 * Slug: michishirube-consulting/letter-main
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-letter"><!-- wp:group {"align": "wide", "className": "mc-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-letter__img"} -->
<figure class="wp-block-image size-full mc-piece mc-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/city.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mc-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-letter__card"><!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mc-links"} -->
<div class="wp-block-buttons mc-links"><!-- wp:button {"className": "mc-mailto"} -->
<div class="wp-block-button mc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@michishirube-consulting.example?subject=' . rawurlencode( michishirube_consulting_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( michishirube_consulting_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
