<?php
/**
 * Title: Home: rates
 * Slug: koori-coldstore/front-rates
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A giant lowercase word and a full-width rate table of seven services with right-aligned prices.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"rates","className":"kc-sec kc-rates-sec","layout":{"type":"default"}} -->
<section id="rates" class="wp-block-group alignfull kc-sec kc-rates-sec"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rates_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rates_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"kc-rates"} -->
<figure class="wp-block-table kc-rates"><table><thead><tr><th><?php echo esc_html( koori_coldstore_t( 'rates_h1' ) ); ?></th><th><?php echo esc_html( koori_coldstore_t( 'rates_h2' ) ); ?></th><th><?php echo esc_html( koori_coldstore_t( 'rates_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( koori_coldstore_t( 'rate1_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate1_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate2_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate2_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate3_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate3_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate4_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate4_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate5_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate5_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate6_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate6_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate6_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate7_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate7_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"kc-rates__foot","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rates__foot"><!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-more"} -->
<p class="kc-more"><a href="<?php echo koori_coldstore_url( '/rates/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'rates_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
