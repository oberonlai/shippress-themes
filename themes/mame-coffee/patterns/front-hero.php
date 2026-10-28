<?php
/**
 * Title: Home: hero
 * Slug: mame-coffee/front-hero
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Framed window: a sharp photograph floating over a full-bleed roastery backdrop, the wordmark crossing its lower-left corner, an underlined lede and a scroll cue.
 */
$t   = 'mame_coffee_t';
$bg  = mc_url( '01-hall.webp' );
$alt = $t( 'hero_alt_bg' );
?>
<!-- wp:cover {"url":"<?php echo $bg; ?>","alt":"<?php echo esc_attr( $alt ); ?>","dimRatio":25,"overlayColor":"roast","minHeight":100,"minHeightUnit":"vh","align":"full","className":"mc-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull mc-hero sp-parallax" style="min-height:100vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $alt ); ?>" src="<?php echo $bg; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-roast-background-color has-background-dim-25 has-background-dim"></span><div class="wp-block-cover__inner-container"><?php
echo mc_open( 'mc-hero__stage' ) . "\n";
echo mc_open( 'mc-hero__lede' ) . "\n" . mc_p( 'mc-hero__l1', $t( 'hero_lede_1' ) ) . "\n\n" . mc_p( 'mc-hero__l2', $t( 'hero_lede_2' ) ) . "\n" . mc_close() . "\n\n";
echo mc_img( '02-drop.webp', $t( 'hero_alt_frame' ), 'mc-hero__frame' ) . "\n\n";
echo mc_open( 'mc-hero__id' ) . "\n" . mc_h( 1, 'mc-hero__mark', $t( 'hero_mark' ) ) . "\n\n" . mc_p( 'mc-hero__sub', $t( 'hero_sub' ) ) . "\n" . mc_close() . "\n\n";
echo mc_p( 'mc-hero__cue', $t( 'hero_scroll' ) ) . "\n";
echo mc_close();
?></div></div>
<!-- /wp:cover -->
