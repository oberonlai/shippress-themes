<?php
/**
 * Title: Home: the counter
 * Slug: yoru-bar/front-seats
 * Categories: yoru-bar
 * Keywords: bar, seats, booking
 * Viewport Width: 1440
 * Description: A white top and a near-black bottom split by one wide photograph, a seat arc of twelve, three seating rows with round chevrons and the booking line.
 */

$yb_arc = '';
for ( $i = 1; $i <= 12; $i++ ) {
	$yb_y    = (int) round( ( ( $i - 6.5 ) * ( $i - 6.5 ) ) * 0.9 );
	$yb_arc .= '<li style="--y:' . $yb_y . 'px"><span class="yb-seat__dot"></span><span class="yb-seat__n">' . $i . '</span></li>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-seats","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-seats"><!-- wp:group {"className":"yb-seats__top sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-seats__top sp-stagger"><!-- wp:heading {"fontSize":"xx-large","className":"yb-struck yb-struck--ink sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck yb-struck--ink sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'se_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-line"} -->
<p class="yb-line"><?php echo esc_html( yoru_bar_t( 'se_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-seats__photo sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group yb-seats__photo sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"yb-seats__fig sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yb-seats__fig sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y12 yb-seats__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y12 yb-seats__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y12' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y12' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-seats__dark","layout":{"type":"default"}} -->
<div class="wp-block-group yb-seats__dark"><!-- wp:paragraph {"className":"yb-seats__lead"} -->
<p class="yb-seats__lead"><?php echo esc_html( yoru_bar_t( 'se_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="yb-arc" role="img" aria-label="<?php echo esc_attr( yoru_bar_t( 'se_p' ) ); ?>"><ul class="yb-arc__seats"><?php echo $yb_arc; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul><p class="yb-arc__labels"><span class="yb-arc__a"><?php echo esc_html( yoru_bar_t( 'se_facing' ) ); ?></span><span class="yb-arc__b"><?php echo esc_html( yoru_bar_t( 'se_window' ) ); ?></span></p></div>
<!-- /wp:html -->

<!-- wp:group {"className":"yb-rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-rows sp-reveal sp-reveal--up"><?php foreach ( array( 1 => '1900', 2 => '2100', 3 => '2300' ) as $yb_n => $yb_h ) : ?><!-- wp:paragraph {"className":"yb-row"} -->
<p class="yb-row"><a href="<?php echo esc_url( home_url( '/reserve/#seating-' . $yb_h ) ); ?>"><?php echo esc_html( yoru_bar_t( 'se_row' . $yb_n ) ); ?></a></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yb-seats__note"} -->
<p class="yb-seats__note"><?php echo esc_html( yoru_bar_t( 'se_note' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo yoru_bar_more( 'se_more', '/reserve/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
