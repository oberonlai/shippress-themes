<?php
/**
 * Title: Home: three shelves (inset veil band)
 * Slug: yamabiko-outdoor-supply/front-shelves
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Inset photo band under a dark veil with three underlined shelf links.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"shelves","className":"yb-band","layout":{"type":"default"}} -->
<section id="shelves" class="wp-block-group alignfull yb-band"><!-- wp:group {"className":"yb-band__box","layout":{"type":"default"}} -->
<div class="wp-block-group yb-band__box"><!-- wp:image {"sizeSlug":"full","className":"yb-band__photo sp-parallax"} -->
<figure class="wp-block-image size-full yb-band__photo sp-parallax"><img src="<?php echo esc_url( $yb . 'p09-shelves.webp' ); ?>" alt="<?php echo esc_attr( yamabiko_outdoor_supply_t( 'a8e599468' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-band__entries","layout":{"type":"default"}} -->
<div class="wp-block-group yb-band__entries"><!-- wp:html -->
<?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k7b7f8326' ) ); ?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yb-band__note"} -->
<p class="yb-band__note"><?php echo wp_kses_post( yamabiko_outdoor_supply_t( 'k9be3a6ab' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
