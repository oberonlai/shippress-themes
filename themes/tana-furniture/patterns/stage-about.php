<?php
/**
 * Title: Page stage: about
 * Slug: tana-furniture/stage-about
 * Categories: tana-furniture
 * Inserter: no
 * Description: The three-photo stage with the stepped headline and the pentagon stamp.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage tf-stage--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage tf-stage--page"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p12-upholstery' ); ?>" alt="<?php tana_furniture_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p10-swatch-book' ); ?>" alt="<?php tana_furniture_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p18-shop-front' ); ?>" alt="<?php tana_furniture_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><span class="tf-step"><?php echo esc_html( tana_furniture_t( 'sg_about_h1_1' ) ); ?></span><span class="tf-step"><?php echo esc_html( tana_furniture_t( 'sg_about_h1_2' ) ); ?></span><span class="tf-step"><?php echo esc_html( tana_furniture_t( 'sg_about_h1_3' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/visit/"><?php echo tana_furniture_lines( 'sg_about_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
