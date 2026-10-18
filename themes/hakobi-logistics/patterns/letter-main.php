<?php
/**
 * Title: Newsletter: sign up
 * Slug: hakobi-logistics/letter-main
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: A photo beside the sign-up card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-section hg-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-section hg-letter"><!-- wp:group {"align": "wide", "className": "hg-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hg-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-letter__img"} -->
<figure class="wp-block-image size-full hg-piece hg-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sorting.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_sorting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-letter__card"><!-- wp:heading {"className": "hg-sec__title"} -->
<h2 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hg-links"} -->
<div class="wp-block-buttons hg-links"><!-- wp:button {"className": "hg-mailto"} -->
<div class="wp-block-button hg-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hakobilogistics.example?subject=' . rawurlencode( hakobi_logistics_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( hakobi_logistics_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
