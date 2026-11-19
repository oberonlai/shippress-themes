<?php
/**
 * Title: Home: foam row
 * Slug: tsukuri-design/front-foam
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Wide-tracked label over a thirty-pixel hairline and a row of seven sanded foam models, cut by the fold.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-foam","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-foam"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'l_foam' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-foam__row sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-foam__row sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p02-handset-row.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'foam_cap' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
