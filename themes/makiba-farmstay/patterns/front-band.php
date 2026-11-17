<?php
/**
 * Title: Home: pasture band with parallax
 * Slug: makiba-farmstay/front-band
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Full-bleed hill pasture photograph with a slow parallax, the top edge cut by the paper ridge and one white line at the bottom left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/pasture-herd.webp' ) ); ?>","alt":"A dairy cow herd grazes across wide green hill pastures under pale morning clouds.","dimRatio":10,"customOverlayColor":"#000000","minHeight":640,"minHeightUnit":"px","contentPosition":"bottom left","className":"sp-parallax mf-band","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left sp-parallax mf-band" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( makiba_farmstay_t( 'a3580b396' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pasture-herd.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:html -->
<svg class="mf-band__cut" viewBox="0 0 1440 90" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 0H1440V30C1320 50 1180 66 1040 52C860 34 760 8 600 14C420 20 260 70 120 66C70 64 30 56 0 44Z" fill="#fff"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"mf-band__text","layout":{"type":"default"}} -->
<div class="wp-block-group mf-band__text"><!-- wp:heading {"level":2,"className":"mf-band__line"} -->
<h2 class="wp-block-heading mf-band__line"><?php echo wp_kses_post( makiba_farmstay_t( 'k4bde74d1' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-band__sub"} -->
<p class="mf-band__sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k200c5a00' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
