<?php
/**
 * Title: Home: sample-kit contact card
 * Slug: seiwa-furniture/front-contact
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: An outlined card running to the right edge with a photograph flush right, the request pill and the phone and email line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-band sw-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-band sw-contact"><!-- wp:group {"className":"sw-cards","layout":{"type":"default"}} -->
<div class="wp-block-group sw-cards"><!-- wp:group {"className":"sw-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sw-card__tx","layout":{"type":"default"}} -->
<div class="wp-block-group sw-card__tx"><!-- wp:paragraph {"className":"sw-kick"} -->
<p class="sw-kick"><?php echo esc_html( seiwa_furniture_t( 'con_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sw-card__t"} -->
<h3 class="wp-block-heading sw-card__t"><?php echo esc_html( seiwa_furniture_t( 'con_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sw-card__b"} -->
<p class="sw-card__b"><?php echo esc_html( seiwa_furniture_t( 'con_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sw-hbtn"} -->
<div class="wp-block-buttons sw-hbtn"><!-- wp:button {"className":"sw-pill"} -->
<div class="wp-block-button sw-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( seiwa_furniture_t( 'con_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sw-card__tel"} -->
<p class="sw-card__tel"><?php echo esc_html( seiwa_furniture_t( 'con_tel' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-card__ln"} -->
<figure class="wp-block-image size-full sw-card__ln"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-envelope.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-card__ph"} -->
<figure class="wp-block-image size-full sw-card__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/contact-kit-desk.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P14' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
