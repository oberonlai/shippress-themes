<?php
/**
 * Title: Letters: sign up
 * Slug: shinai-dojo/letter-main
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: An isometric plate beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-letter"><!-- wp:group {"align": "wide", "className": "sd-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-letter__img"} -->
<figure class="wp-block-image size-full sd-piece sd-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dawn.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sd-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-letter__card"><!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sd-links"} -->
<div class="wp-block-buttons sd-links"><!-- wp:button {"className": "sd-mailto"} -->
<div class="wp-block-button sd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shinaidojo.example?subject=' . rawurlencode( shinai_dojo_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( shinai_dojo_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
