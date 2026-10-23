<?php
/**
 * Title: Home: the counter shelf
 * Slug: megumi-pharmacy/front-shelf
 * Categories: megumi-pharmacy
 * Keywords: shop, products
 * Viewport Width: 1440
 * Description: Four square products on a pale ground with the name and the price.
 */
$items = array(
	array( 'p13-organiser.webp', 'Weekly Pill Organiser', '$14.00', 'Translucent grey seven-day pill organiser centred on a pale stone surface.' ),
	array( 'p14-thermometer.webp', 'Digital Thermometer', '$19.00', 'White digital thermometer with a blank display resting beside its plain case.' ),
	array( 'p15-pouch.webp', 'Travel First-Aid Pouch', '$28.00', 'Open warm grey canvas first-aid pouch showing plain plasters and gauze.' ),
	array( 'p16-balm.webp', 'Unscented Hand Balm 75 ml', '$16.00', 'Plain white tube of unscented hand balm beside a small tin with no print.' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-shelf","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-shelf"><!-- wp:group {"className":"mp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap"><!-- wp:group {"className":"mp-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-head sp-reveal sp-reveal--up"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">Counter shelf</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2">Small things we keep<br>by the till.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-lede"} -->
<p class="mp-lede">Chosen by the pharmacists and sold without fuss. Ask us at the counter if you are not sure. No medicines are sold online. Pickup at the counter is free.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-more"} -->
<p class="mp-more"><a href="/shop/">Visit the shop</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-products sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mp-products sp-stagger"><?php foreach ( $items as $it ) : ?>
<!-- wp:group {"className":"mp-product sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-product sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"mp-product__img"} -->
<figure class="wp-block-image size-full mp-product__img"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $it[0] ) ); ?>" alt="<?php echo esc_attr( $it[3] ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-product__name"} -->
<p class="mp-product__name"><?php echo esc_html( $it[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-product__price"} -->
<p class="mp-product__price"><?php echo esc_html( $it[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-cap"} -->
<p class="mp-cap">All prices in Canadian dollars.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
