<?php
/**
 * Title: Home: room-log strip
 * Slug: koori-coldstore/front-log
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A 310px label cell beside three hairline rows of time, room, reading and an amber in-band tick.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-log","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-log"><!-- wp:group {"className":"kc-log__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__grid"><!-- wp:group {"className":"kc-log__label","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__label"><!-- wp:paragraph {"className":"kc-log__title"} -->
<p class="kc-log__title"><?php echo esc_html( koori_coldstore_t( 'log_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__sub"} -->
<p class="kc-log__sub"><?php echo esc_html( koori_coldstore_t( 'log_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__rows"><!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'log_t1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'log_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'log_v1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'log_ok' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'log_t2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'log_r2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'log_v2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'log_ok' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'log_t3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'log_r3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'log_v3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'log_ok' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-log__more"} -->
<p class="kc-log__more"><a href="<?php echo koori_coldstore_url( '/booking/#log' ); ?>"><?php echo esc_html( koori_coldstore_t( 'log_more' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
