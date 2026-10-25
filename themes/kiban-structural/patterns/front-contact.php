<?php
/**
 * Title: Front page: SIGN echo and contact details
 * Slug: kiban-structural/front-contact
 * Categories: kiban-structural
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kb-sign","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kb-sign"><!-- wp:html -->
<div class="kb-sign__word" aria-hidden="true"><span>SIGN</span></div>
<!-- /wp:html --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kb-sign__win"} -->
<figure class="wp-block-image size-full kb-sign__win"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kb-signed-calcs.webp' ) ); ?>" alt="<?php echo esc_attr( kiban_structural_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"kb-sign__info","layout":{"type":"default"}} -->
<div class="wp-block-group kb-sign__info"><!-- wp:heading {"level":2,"className":"kb-sign__h"} -->
<h2 class="wp-block-heading kb-sign__h"><?php echo esc_html( kiban_structural_t( 'ct_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kb-sign__p"} -->
<p class="kb-sign__p"><?php echo esc_html( kiban_structural_t( 'ct_addr' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kb-sign__p"} -->
<p class="kb-sign__p"><?php echo esc_html( kiban_structural_t( 'ct_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kb-sign__p"} -->
<p class="kb-sign__p"><?php echo esc_html( kiban_structural_t( 'ct_mail' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"kb-btns"} -->
<div class="wp-block-buttons kb-btns"><!-- wp:button {"className":"kb-btn kb-btn--dot"} -->
<div class="wp-block-button kb-btn kb-btn--dot"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( kiban_structural_t( 'ct_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
