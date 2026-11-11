<?php
/**
 * Title: Page stage: newsletter
 * Slug: tana-furniture/stage-newsletter
 * Categories: tana-furniture
 * Inserter: no
 * Description: The three-photo stage with the stepped headline and the pentagon stamp.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage tf-stage--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage tf-stage--page"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p09-woods' ); ?>" alt="<?php tana_furniture_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p02-swatch' ); ?>" alt="<?php tana_furniture_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p13-showroom' ); ?>" alt="<?php tana_furniture_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><span class="tf-step"><?php echo esc_html( tana_furniture_t( 'sg_newsletter_h1_1' ) ); ?></span><span class="tf-step"><?php echo esc_html( tana_furniture_t( 'sg_newsletter_h1_2' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/journal/"><?php echo tana_furniture_lines( 'sg_newsletter_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
