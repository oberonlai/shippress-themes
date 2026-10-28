<?php
/**
 * Title: Home: visit
 * Slug: mame-coffee/front-visit
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: A contained photograph with an underlined statement and four hairline info columns: address, bar hours, roasting days, contact.
 */
$t   = 'mame_coffee_t';
$bg  = mc_url( '12-bar.webp' );
$alt = $t( 'visit_alt' );
echo mc_open( 'mc-sec mc-visit', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
?>
<!-- wp:cover {"url":"<?php echo $bg; ?>","alt":"<?php echo esc_attr( $alt ); ?>","dimRatio":25,"overlayColor":"roast","minHeight":640,"className":"mc-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover mc-visit__photo" style="min-height:640px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $alt ); ?>" src="<?php echo $bg; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-roast-background-color has-background-dim-25 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php
echo mc_h( 2, 'mc-visit__title', $t( 'visit_1' ) . '<br>' . $t( 'visit_2' ) );
?></div></div>
<!-- /wp:cover -->
<?php
echo "\n\n" . mc_p( 'mc-para', $t( 'visit_text' ) ) . "\n\n";
echo mc_open( 'mc-grid mc-grid--4 mc-info' ) . "\n";
foreach ( array( 'a', 'b', 'c', 'd' ) as $k ) {
	echo mc_open( 'mc-info__col' ) . "\n" . mc_p( 'mc-info__t', $t( "visit_{$k}_t" ) ) . "\n\n" . mc_p( 'mc-info__v', $t( "visit_{$k}" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n";
echo mc_open( 'mc-foot' ) . "\n" . mc_more( '/visit/', $t( 'visit_more' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
