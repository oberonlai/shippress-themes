<?php
/**
 * Title: Home: hero
 * Slug: yanagi-hygiene/front-hero
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Full-bleed ceiling-void photograph with a white commercial skyline cut into its foot, two-line headline, an outlined plan badge and a twelve-month rail with four visit markers.
 */
?>
<?php
$months = explode( ',', yh_t( 'months' ) );
$visits = array( 2, 5, 8, 11 );
$rail   = '';
foreach ( $months as $i => $m ) {
	$n     = $i + 1;
	$rail .= '<span class="yh-rail__m' . ( in_array( $n, $visits, true ) ? ' yh-rail__m--visit' : '' ) . '" style="--i:' . (int) array_search( $n, $visits, true ) . '"><i></i><b>' . esc_html( $m ) . '</b></span>';
}
$img = get_theme_file_uri( 'assets/images/i01-hero.webp' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":0,"className":"yh-hero yh-skyline alignfull sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover yh-hero yh-skyline alignfull sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yh_t( 'hero_alt' ) ); ?>" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"yh-hero__title"} -->
<h1 class="wp-block-heading yh-hero__title"><?php echo esc_html( yh_t( 'hero_1' ) ); ?><br><?php echo esc_html( yh_t( 'hero_2' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"yh-badge"} -->
<p class="yh-badge"><?php echo esc_html( yh_t( 'badge' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"yh-railwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-railwrap"><!-- wp:group {"className":"yh-railstrip","layout":{"type":"default"}} -->
<div class="wp-block-group yh-railstrip"><!-- wp:html -->
<div class="yh-rail" role="img" aria-label="<?php echo esc_attr( yh_t( 'rail_label' ) ); ?>"><div class="yh-rail__line"><?php echo $rail; // phpcs:ignore WordPress.Security.EscapeOutput ?></div><p class="yh-rail__cap"><?php echo esc_html( yh_t( 'rail_cap' ) ); ?></p></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
