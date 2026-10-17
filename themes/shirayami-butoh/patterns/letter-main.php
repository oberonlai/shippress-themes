<?php
/**
 * Title: Letters: sign up
 * Slug: shirayami-butoh/letter-main
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: A photograph beside the ink sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-letter"><!-- wp:group {"align": "wide", "className": "sb-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-letter__img"} -->
<figure class="wp-block-image size-full sb-piece sb-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sb-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-letter__card"><!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sb-links"} -->
<div class="wp-block-buttons sb-links"><!-- wp:button {"className": "sb-mailto"} -->
<div class="wp-block-button sb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shirayamibutoh.example?subject=' . rawurlencode( shirayami_butoh_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( shirayami_butoh_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
