<?php
/**
 * Title: Twelve-month rail
 * Slug: yanagi-hygiene/plan-rail
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, timeline
 * Viewport Width: 1440
 * Description: Large twelve-month tick rail with the four visit markers.
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
?>
<!-- wp:group {"className":"yh-railpage","layout":{"type":"default"}} -->
<div class="wp-block-group yh-railpage"><!-- wp:html -->
<div class="yh-rail" role="img" aria-label="<?php echo esc_attr( yh_t( 'rail_label' ) ); ?>"><div class="yh-rail__line"><?php echo $rail; // phpcs:ignore WordPress.Security.EscapeOutput ?></div><p class="yh-rail__cap"><?php echo esc_html( yh_t( 'rail_cap' ) ); ?></p></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
