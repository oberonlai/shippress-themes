<?php
/**
 * Title: Home: talk to us
 * Slug: kagi-security/front-close
 * Categories: kagi-security
 * Keywords: contact, call, close
 * Viewport Width: 1440
 * Description: A client-visit photograph with a small indigo chevron and a second photograph, beside an invitation to a first call, the office and incident lines and chip buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-close","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-close"><!-- wp:group {"className":"ks-close__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-close__grid"><!-- wp:group {"className":"ks-close__media","layout":{"type":"default"}} -->
<div class="wp-block-group ks-close__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-close__photo"} -->
<figure class="wp-block-image size-full ks-close__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/client-visit.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_close_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-close__chevron" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-close__photo2"} -->
<figure class="wp-block-image size-full ks-close__photo2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/coffee-handover.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_close_img2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-close__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-close__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_close_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_close_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_close_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-close__lines","layout":{"type":"default"}} -->
<div class="wp-block-group ks-close__lines"><!-- wp:paragraph {"className":"ks-close__line"} -->
<p class="ks-close__line"><?php echo wp_kses_post( kagi_security_t( 'front_close_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-close__line"} -->
<p class="ks-close__line"><?php echo wp_kses_post( kagi_security_t( 'front_close_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-close__line"} -->
<p class="ks-close__line"><?php echo wp_kses_post( kagi_security_t( 'front_close_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kagi_security_t( 'front_close_btn' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-chip-light"} -->
<div class="wp-block-button is-style-chip-light"><a class="wp-block-button__link wp-element-button" href="/getting-started/"><?php echo wp_kses_post( kagi_security_t( 'front_close_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
