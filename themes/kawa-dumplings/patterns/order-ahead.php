<?php
/**
 * Title: Home: order ahead
 * Slug: kawa-dumplings/order-ahead
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: The single way to order ahead on a clay panel in thirds: three numbered rows, a cut-off ticket and a pickup photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-order","layout":{"type":"default"}} -->
<section class="wp-block-group kd-order"><!-- wp:group {"className":"kd-order__left","layout":{"type":"default"}} -->
<div class="wp-block-group kd-order__left"><!-- wp:group {"className":"kd-tabbar","layout":{"type":"default"}} -->
<div class="wp-block-group kd-tabbar"><!-- wp:paragraph {"className":"kd-tab"} -->
<p class="kd-tab"><?php echo esc_html( kawa_dumplings_t( 'tab_order' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"kd-h2"} -->
<h2 class="wp-block-heading kd-h2"><?php echo esc_html( kawa_dumplings_t( 'oa_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kd-rows kd-rows--left sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kd-rows kd-rows--left sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kd-row kd-row--num"} -->
<p class="kd-row kd-row--num"><span class="kd-row__n">01</span> <?php echo esc_html( kawa_dumplings_t( 'oa_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-row kd-row--num"} -->
<p class="kd-row kd-row--num"><span class="kd-row__n">02</span> <?php echo esc_html( kawa_dumplings_t( 'oa_r2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-row kd-row--num"} -->
<p class="kd-row kd-row--num"><span class="kd-row__n">03</span> <?php echo esc_html( kawa_dumplings_t( 'oa_r3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kd-pill"} -->
<div class="wp-block-button kd-pill"><a class="wp-block-button__link wp-element-button" href="/order-ahead/"><?php echo esc_html( kawa_dumplings_t( 'cta_order_ahead' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-order__mid","layout":{"type":"default"}} -->
<div class="wp-block-group kd-order__mid"><!-- wp:group {"className":"kd-ticket kd-ticket--cut","layout":{"type":"default"}} -->
<div class="wp-block-group kd-ticket kd-ticket--cut"><!-- wp:paragraph {"className":"kd-ticket__pill"} -->
<p class="kd-ticket__pill"><?php echo esc_html( kawa_dumplings_t( 'oa_ticket' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-lrow"} -->
<p class="kd-lrow"><span class="kd-lrow__l"><?php echo esc_html( kawa_dumplings_t( 'oa_lunch' ) ); ?></span><span class="kd-lrow__d" aria-hidden="true"></span><span class="kd-lrow__v"><?php echo esc_html( kawa_dumplings_t( 'oa_lunch_v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-lrow"} -->
<p class="kd-lrow"><span class="kd-lrow__l"><?php echo esc_html( kawa_dumplings_t( 'oa_dinner' ) ); ?></span><span class="kd-lrow__d" aria-hidden="true"></span><span class="kd-lrow__v"><?php echo esc_html( kawa_dumplings_t( 'oa_dinner_v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-lrow"} -->
<p class="kd-lrow"><span class="kd-lrow__l"><?php echo esc_html( kawa_dumplings_t( 'oa_big' ) ); ?></span><span class="kd-lrow__d" aria-hidden="true"></span><span class="kd-lrow__v"><?php echo esc_html( kawa_dumplings_t( 'oa_big_v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"kd-ticket__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity kd-ticket__rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"kd-ticket__days"} -->
<p class="kd-ticket__days"><?php echo esc_html( kawa_dumplings_t( 'oa_pay' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-order__right","layout":{"type":"default"}} -->
<div class="wp-block-group kd-order__right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kd-order__img"} -->
<figure class="wp-block-image size-full kd-order__img"><img src="<?php echo esc_url( kawa_dumplings_img( 'pickup-window.webp' ) ); ?>" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
