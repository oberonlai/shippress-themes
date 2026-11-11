<?php
/**
 * Title: Page stage: visit
 * Slug: tana-furniture/stage-visit
 * Categories: tana-furniture
 * Inserter: no
 * Description: The three-photo stage with an editorial headline and the pentagon stamp.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage tf-stage--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage tf-stage--page"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p18-shop-front' ); ?>" alt="<?php tana_furniture_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p13-showroom' ); ?>" alt="<?php tana_furniture_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p03-living-room' ); ?>" alt="<?php tana_furniture_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><?php echo tana_furniture_hero( array( 'sg_visit_h1_1', 'sg_visit_h1_2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/contact/"><?php echo tana_furniture_lines( 'sg_visit_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
