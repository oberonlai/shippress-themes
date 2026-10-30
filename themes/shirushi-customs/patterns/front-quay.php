<?php
/**
 * Title: Home: the quay
 * Slug: shirushi-customs/front-quay
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: A blurred copy of the quay photograph as the ground, the same photograph sharp in a small window, and an outline map with a ringed pin.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-quay sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-quay sp-parallax"><!-- wp:group {"className":"sc-quay__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img . 'q1.webp' ); ?>" alt="" role="presentation"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-quay__in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__in"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-quay__inset sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full sc-quay__inset sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( $img . 'q1.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_q1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-quay__text","layout":{"type":"default"}} -->
<div class="wp-block-group sc-quay__text"><!-- wp:heading {"className":"sc-h2 sc-h2--w"} -->
<h2 class="wp-block-heading sc-h2 sc-h2--w"><?php echo esc_html( sc_t( 'quay_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-quay__p"} -->
<p class="sc-quay__p"><?php echo esc_html( sc_t( 'quay_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill sc-pill--w"} -->
<p class="sc-pill sc-pill--w"><a href="/about/"><?php echo esc_html( sc_t( 'quay_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sc-map"><p class="sc-map__cap"><b><?php echo esc_html( sc_t( 'map_l1' ) ); ?></b><span><?php echo esc_html( sc_t( 'map_l2' ) ); ?></span><span><?php echo esc_html( sc_t( 'map_l3' ) ); ?></span></p><svg class="sc-map__svg" viewBox="0 0 240 300" width="240" height="300" fill="none" stroke="#F1F3F2" stroke-width="1" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M6 8 L52 14 L78 6 L112 22 L120 44 L104 62 L124 84 L150 88 L170 110 L162 132 L176 152 L206 160 L234 184 L226 214 L236 244 L208 262 L176 258 L150 276 L112 270 L84 288 L40 282 L22 258 L36 232 L14 204 L28 176 L8 150 L26 124 L10 96 L30 70 L6 44 Z"/><path d="M150 88 L176 80 L204 92 L214 118 L196 134 L170 110" opacity=".6"/><circle cx="128" cy="212" r="7" stroke-width="1.5"/><circle cx="128" cy="212" r="2" fill="#F1F3F2" stroke="none"/></svg></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
