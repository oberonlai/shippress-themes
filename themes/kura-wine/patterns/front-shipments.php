<?php
/**
 * Title: Home: shipments
 * Slug: kura-wine/front-shipments
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Three shipment rows that alternate sides, each 3:2 photo with its region as a vertical title on the photo's edge.
 */
?>
<?php
$rows = array(
	array( 1, 'K6', '' ),
	array( 2, 'K7', ' kw-ship--flip' ),
	array( 3, 'K8', '' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"shipments","className":"kw-sec kw-shipments","layout":{"type":"default"}} -->
<section id="shipments" class="wp-block-group alignfull kw-sec kw-shipments"><!-- wp:group {"className":"kw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kw-wrap"><!-- wp:group {"className":"kw-shipments__head","layout":{"type":"default"}} -->
<div class="wp-block-group kw-shipments__head"><!-- wp:paragraph {"className":"kw-label"} -->
<p class="kw-label"><?php echo esc_html( kura_wine_t( 'sh_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-catch"} -->
<p class="kw-catch"><?php echo esc_html( kura_wine_t( 'sh_catch' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php foreach ( $rows as $r ) : ?>

<!-- wp:group {"className":"kw-ship<?php echo esc_attr( $r[2] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group kw-ship<?php echo esc_attr( $r[2] ); ?>"><!-- wp:group {"className":"kw-ship__pic","layout":{"type":"default"}} -->
<div class="wp-block-group kw-ship__pic"><?php echo kura_wine_image( $r[1], 'kw-ship__img sp-reveal sp-reveal--mask' ); ?>

<!-- wp:paragraph {"className":"kw-vt"} -->
<p class="kw-vt"><?php echo esc_html( kura_wine_t( 'sh' . $r[0] . '_region' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-ship__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kw-ship__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kw-ship__grower"} -->
<p class="kw-ship__grower"><?php echo esc_html( kura_wine_t( 'sh' . $r[0] . '_grower' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-ship__meta"} -->
<p class="kw-ship__meta"><?php echo esc_html( kura_wine_t( 'sh' . $r[0] . '_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kura_wine_t( 'sh' . $r[0] . '_note' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo kura_wine_more( 'sh_bottles', '/shop/' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
