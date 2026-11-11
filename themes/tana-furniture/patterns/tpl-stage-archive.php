<?php
/**
 * Title: Template stage: archive
 * Slug: tana-furniture/tpl-stage-archive
 * Categories: tana-furniture
 * Inserter: no
 * Description: Stage for the posts page, archives and categories.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-stage tf-stage--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tf-stage tf-stage--page"><!-- wp:group {"className":"tf-panes","layout":{"type":"default"}} -->
<div class="wp-block-group tf-panes"><!-- wp:group {"className":"tf-pane tf-pane--tl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--tl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p11-room-plan' ); ?>" alt="<?php tana_furniture_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--bl","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p12-upholstery' ); ?>" alt="<?php tana_furniture_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-pane tf-pane--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tf-pane tf-pane--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tf-pane__a"} -->
<figure class="wp-block-image size-full tf-pane__a"><img src="<?php echo tana_furniture_img( 'p14-stair-carry' ); ?>" alt="<?php tana_furniture_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tf-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tf-stage__copy"><!-- wp:query-title {"type":"archive","level":1,"className":"tf-h1 tf-h1--query"} /-->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp"} -->
<p class="is-style-stamp tf-stamp"><a href="/visit/"><?php echo tana_furniture_lines( 'sg_journal_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
