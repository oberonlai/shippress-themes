<?php
/**
 * Title: Front page: dark rounded band with parallax photo
 * Slug: kiban-structural/front-band
 * Categories: kiban-structural
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/kb-band-corewall.webp' ) ); ?>","dimRatio":60,"customOverlayColor":"#16181a","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","isUserOverlayColor":true,"align":"full","className":"kb-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left kb-band sp-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#16181a"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kiban_structural_t( 'alt_p02' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kb-band-corewall.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kb-band__in sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group kb-band__in sp-reveal sp-reveal--mask"><!-- wp:paragraph {"className":"kb-label kb-label--white"} -->
<p class="kb-label kb-label--white"><?php echo esc_html( kiban_structural_t( 'band_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"kb-band__lines"} -->
<h2 class="wp-block-heading kb-band__lines"><?php echo esc_html( kiban_structural_t( 'band_l1' ) ); ?><br><?php echo esc_html( kiban_structural_t( 'band_l2' ) ); ?><br><?php echo esc_html( kiban_structural_t( 'band_l3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
