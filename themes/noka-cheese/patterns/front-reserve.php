<?php
/**
 * Title: Home: reserve a board
 * Slug: noka-cheese/front-reserve
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: The single way to reserve a board, with the full price list.
 */
?>
<!-- wp:group {"className":"nk-sec nk-reserve","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-reserve"><!-- wp:group {"className":"nk-row nk-row--reserve","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--reserve"><!-- wp:group {"className":"nk-cell nk-cell--photo","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--photo"><!-- wp:group {"className":"nk-photo-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nk-photo-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-sq nk-sq--32"} -->
<figure class="wp-block-image size-full nk-sq nk-sq--32"><img src="<?php echo noka_cheese_img( 'board-four.webp' ); ?>" alt="<?php echo esc_attr( noka_cheese_t( 'alt_board' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'rs_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'rs_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nk-body"} -->
<p class="nk-body"><?php echo wp_kses_post( noka_cheese_t( 'rs_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"nk-pills"} -->
<div class="wp-block-buttons nk-pills"><!-- wp:button {"className":"nk-pill nk-pill--solid"} -->
<div class="wp-block-button nk-pill nk-pill--solid"><a class="wp-block-button__link wp-element-button" href="/boards/"><?php echo wp_kses_post( noka_cheese_t( 'cta_reserve_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-tablewrap","layout":{"type":"default"}} -->
<div class="wp-block-group nk-tablewrap"><!-- wp:table {"className":"nk-table"} -->
<figure class="wp-block-table nk-table"><table><thead><tr><th><?php echo wp_kses_post( noka_cheese_t( 'rs_th1' ) ); ?></th><th><?php echo wp_kses_post( noka_cheese_t( 'rs_th2' ) ); ?></th><th><?php echo wp_kses_post( noka_cheese_t( 'rs_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i1' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d1' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c1' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i2' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d2' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c2' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i3' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d3' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c3' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i4' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d4' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c4' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i5' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d5' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c5' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( noka_cheese_t( 'rs_i6' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_d6' ) ); ?></td><td><?php echo wp_kses_post( noka_cheese_t( 'rs_c6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
