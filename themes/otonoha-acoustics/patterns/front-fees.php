<?php
/**
 * Title: Home: fees
 * Slug: otonoha-acoustics/front-fees
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: A label column and the full fee table: six items with prices right-aligned, a note on what every survey includes and travel, and the booking link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-sec oto-fees","anchor":"fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull oto-sec oto-fees"><!-- wp:group {"className":"oto-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap"><!-- wp:heading {"level":2,"className":"oto-title"} -->
<h2 class="wp-block-heading oto-title"><?php echo esc_html( otonoha_acoustics_t( 'fees_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"oto-fees__sub"} -->
<p class="oto-fees__sub"><?php echo esc_html( otonoha_acoustics_t( 'fees_sub' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:table {"className":"oto-fees__table"} -->
<figure class="wp-block-table oto-fees__table"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( otonoha_acoustics_t( 'fees_th_item' ) ); ?></th><th><?php echo esc_html( otonoha_acoustics_t( 'fees_th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_1' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_2' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_3' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_4' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_5' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( otonoha_acoustics_t( 'fee_6' ) ); ?></td><td><?php echo esc_html( otonoha_acoustics_t( 'fee_6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --><!-- wp:paragraph {"className":"oto-fees__note"} -->
<p class="oto-fees__note"><?php echo esc_html( otonoha_acoustics_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-link"} -->
<p class="oto-link"><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'fees_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
