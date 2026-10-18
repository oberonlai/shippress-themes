<?php
/**
 * Title: Newsletter: sign up
 * Slug: manabi-juku/letter-main
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-letter"><!-- wp:group {"align": "wide", "className": "mj-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-letter__img"} -->
<figure class="wp-block-image size-full mj-piece mj-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-exam.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-letter__card"><!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mj-links"} -->
<div class="wp-block-buttons mj-links"><!-- wp:button {"className": "mj-mailto"} -->
<div class="wp-block-button mj-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@manabijuku.example?subject=' . rawurlencode( manabi_juku_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( manabi_juku_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
