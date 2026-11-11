<?php
/**
 * Title: Page stage: rooms
 * Slug: tana-furniture/stage-rooms
 * Categories: tana-furniture
 * Inserter: no
 * Description: The three-photo stage with the stepped headline and the pentagon stamp.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage tf-stage--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage tf-stage--page"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p15-loft-bed' ); ?>" alt="<?php tana_furniture_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p17-kitchen-corner' ); ?>" alt="<?php tana_furniture_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p16-study' ); ?>" alt="<?php tana_furniture_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><?php echo tana_furniture_hero( array( 'sg_rooms_h1_1', 'sg_rooms_h1_2' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/visit/"><?php echo tana_furniture_lines( 'sg_rooms_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
