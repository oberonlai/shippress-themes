<?php
/**
 * Title: Visit band
 * Slug: kura-wine/visit
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Full-bleed blurred shop-front photograph under an umber wash with hairline info rows.
 */
?>
<?php
$rows = array(
	array( 1, '/visit/' ),
	array( 2, '/visit/#hours' ),
	array( 3, '/delivery/' ),
	array( 4, '/tastings/#club' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"kw-visit sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull kw-visit sp-parallax"><!-- wp:group {"className":"kw-visit__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kw-visit__bg sp-parallax__layer"><?php echo kura_wine_image( 'K11', 'kw-visit__img' ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-wrap kw-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kw-wrap kw-visit__grid"><!-- wp:paragraph {"className":"kw-label"} -->
<p class="kw-label"><?php echo esc_html( kura_wine_t( 'vi_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kw-visit__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kw-visit__rows"><!-- wp:group {"className":"kw-irows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kw-irows sp-stagger"><?php foreach ( $rows as $r ) : ?>
<!-- wp:paragraph {"className":"kw-irow sp-reveal sp-reveal--up"} -->
<p class="kw-irow sp-reveal sp-reveal--up"><a href="<?php echo esc_url( home_url( $r[1] ) ); ?>"><span class="kw-irow__a"><?php echo esc_html( kura_wine_t( 'vi_r' . $r[0] . 'a' ) ); ?></span><span class="kw-irow__b"><?php echo esc_html( kura_wine_t( 'vi_r' . $r[0] . 'b' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<?php echo kura_wine_more( 'vi_more', '/visit/', 'kw-visit__more' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
