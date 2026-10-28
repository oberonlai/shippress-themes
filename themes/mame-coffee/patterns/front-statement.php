<?php
/**
 * Title: Home: statement
 * Slug: mame-coffee/front-statement
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Full-bleed origin photograph with an underlined three-line statement upper-left (parallax backdrop).
 */
$t   = 'mame_coffee_t';
$bg  = mc_url( '03-origin.webp' );
$alt = $t( 'stmt_alt' );
?>
<!-- wp:cover {"url":"<?php echo $bg; ?>","alt":"<?php echo esc_attr( $alt ); ?>","dimRatio":40,"overlayColor":"roast","minHeight":88,"minHeightUnit":"vh","align":"full","className":"mc-stmt sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull mc-stmt sp-parallax" style="min-height:88vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $alt ); ?>" src="<?php echo $bg; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-roast-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php
echo mc_open( 'mc-stmt__in' ) . "\n";
echo mc_h( 2, 'mc-stmt__title', $t( 'stmt_1' ) . '<br>' . $t( 'stmt_2' ) . '<br>' . $t( 'stmt_3' ) ) . "\n\n";
echo mc_p( 'mc-stmt__body', $t( 'stmt_body' ) ) . "\n\n";
echo mc_p( 'mc-stmt__label', $t( 'stmt_label' ) ) . "\n";
echo mc_close();
?></div></div>
<!-- /wp:cover -->
