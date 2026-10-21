<?php
/**
 * Title: Vehicle head
 * Slug: michi-motors/tpl-vehicle-head
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo band head for a vehicle.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-band mm-pagehead mm-pagehead--photo mm-pagehead--car","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-pagehead mm-pagehead--photo mm-pagehead--car"><!-- wp:post-featured-image {"sizeSlug":"full","className":"mm-band__img"} /-->

<!-- wp:group {"className":"mm-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:post-terms {"term":"product_cat","className":"mm-t1 mm-pterm"} /-->

<!-- wp:post-title {"level":1,"className":"mm-t1 mm-t1--title mm-ptitle"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'tpl_vehicle_head_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"mm-product__price"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/test-drive/" aria-label="<?php echo esc_attr( michi_motors_t( 'contact_head_2' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
