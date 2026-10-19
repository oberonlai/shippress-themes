<?php
/**
 * Title: Newsletter: sign up
 * Slug: waza-college/letter-main
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-section wz-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-section wz-letter"><!-- wp:group {"align": "wide", "className": "wz-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide wz-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "wz-piece wz-letter__img"} -->
<figure class="wp-block-image size-full wz-piece wz-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bench.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_bench' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "wz-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-letter__card"><!-- wp:heading {"className": "wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( waza_college_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "wz-links"} -->
<div class="wp-block-buttons wz-links"><!-- wp:button {"className": "wz-mailto"} -->
<div class="wp-block-button wz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@wazacollege.example?subject=' . rawurlencode( waza_college_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( waza_college_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
