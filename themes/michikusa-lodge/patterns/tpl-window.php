<?php
/**
 * Title: Template: title window
 * Slug: michikusa-lodge/tpl-window
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Inset double-exposure title window used above page and post titles.
 */
?>
<?php
$ml_obj  = get_queried_object();
$ml_slug = ( $ml_obj instanceof WP_Post ) ? $ml_obj->post_name : '';
$ml_map  = array(
	'rooms'                => array( 'p17-lodge-first-light.webp', 'p15-bathroom.webp' ),
	'what-a-stay-includes' => array( 'p08-breakfast-counter.webp', 'p07-breakfast-tray.webp' ),
	'late-arrivals'        => array( 'p02-car-under-canopy.webp', 'p03-night-clerk.webp' ),
	'the-road'             => array( 'p09-trunk-road.webp', 'p12-charging-canopy.webp' ),
	'about'                => array( 'p17-lodge-first-light.webp', 'p01-key-on-counter.webp' ),
	'book-tonight'         => array( 'p02-car-under-canopy.webp', 'p14-guest-walking.webp' ),
	'road-notes'           => array( 'p09-trunk-road.webp', 'p10-lake-layby.webp' ),
	'questions'            => array( 'p17-lodge-first-light.webp', 'p07-breakfast-tray.webp' ),
	'privacy'              => array( 'p09-trunk-road.webp', 'p07-breakfast-tray.webp' ),
	'terms'                => array( 'p17-lodge-first-light.webp', 'p03-night-clerk.webp' ),
	'thanks'               => array( 'p02-car-under-canopy.webp', 'p01-key-on-counter.webp' ),
);
$ml_pair  = isset( $ml_map[ $ml_slug ] ) ? $ml_map[ $ml_slug ] : array( 'p09-trunk-road.webp', 'p03-night-clerk.webp' );
$ml_base  = michikusa_lodge_img( $ml_pair[0] );
$ml_balt  = michikusa_lodge_a( 'alt_' . substr( $ml_pair[0], 0, 3 ) );
$ml_over  = michikusa_lodge_img( $ml_pair[1] );
$ml_oalt  = michikusa_lodge_a( 'alt_' . substr( $ml_pair[1], 0, 3 ) );
if ( $ml_obj instanceof WP_Post && 'post' === $ml_obj->post_type && has_post_thumbnail( $ml_obj ) ) {
	$ml_base = esc_url( get_the_post_thumbnail_url( $ml_obj, 'full' ) );
	$ml_balt = esc_attr( get_the_title( $ml_obj ) );
	$ml_over = michikusa_lodge_img( 'p01-key-on-counter.webp' );
	$ml_oalt = michikusa_lodge_a( 'alt_p01' );
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-hero ml-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-hero ml-hero--inner"><!-- wp:group {"className":"ml-window-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window-wrap"><!-- wp:group {"className":"ml-window ml-window--inner sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window ml-window--inner sp-parallax"><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-base","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-base"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo $ml_base; ?>" alt="<?php echo $ml_balt; ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-exposure","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-exposure"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo $ml_over; ?>" alt="<?php echo $ml_oalt; ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="ml-grain" aria-hidden="true" focusable="false" width="100%" height="100%"><filter id="ml-noise"><feTurbulence type="fractalNoise" baseFrequency=".8" numOctaves="2" stitchTiles="stitch"/><feColorMatrix type="saturate" values="0"/></filter><rect width="100%" height="100%" filter="url(#ml-noise)"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"ml-scrim","layout":{"type":"default"}} -->
<div class="wp-block-group ml-scrim"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
