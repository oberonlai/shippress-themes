<?php
/**
 * Title: Letters: sign up
 * Slug: kotonoha-honyaku/letter-main
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: A risograph picture beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-letter"><!-- wp:group {"align": "wide", "className": "kh-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-letter__img"} -->
<figure class="wp-block-image size-full kh-piece kh-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kh-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-letter__card"><!-- wp:heading {"className": "kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kotonoha_honyaku_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kotonoha_honyaku_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kh-links"} -->
<div class="wp-block-buttons kh-links"><!-- wp:button {"className": "kh-mailto"} -->
<div class="wp-block-button kh-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kotonohahonyaku.example?subject=' . rawurlencode( kotonoha_honyaku_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( kotonoha_honyaku_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
