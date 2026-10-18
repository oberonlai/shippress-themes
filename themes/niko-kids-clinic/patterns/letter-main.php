<?php
/**
 * Title: Newsletter: sign up
 * Slug: niko-kids-clinic/letter-main
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-letter"><!-- wp:group {"align": "wide", "className": "nk-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-letter__img"} -->
<figure class="wp-block-image size-full nk-piece nk-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/vaccine.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "nk-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-letter__card"><!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "nk-links"} -->
<div class="wp-block-buttons nk-links"><!-- wp:button {"className": "nk-mailto"} -->
<div class="wp-block-button nk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@nikokidsclinic.example?subject=' . rawurlencode( niko_kids_clinic_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( niko_kids_clinic_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
