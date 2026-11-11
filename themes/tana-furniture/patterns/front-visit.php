<?php
/**
 * Title: Home: visit
 * Slug: tana-furniture/front-visit
 * Categories: tana-furniture
 * Keywords: furniture, visit
 * Viewport Width: 1440
 * Description: Grey band closing the page: the shop front beside a white visit card with the stamp.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band tf-visit","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band tf-visit"><!-- wp:columns {"align":"wide","className":"tf-visit__cols"} -->
<div class="wp-block-columns alignwide tf-visit__cols"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tf-visit__img"} -->
<figure class="wp-block-image size-large tf-visit__img"><img src="<?php echo tana_furniture_img( 'p18-shop-front' ); ?>" alt="<?php tana_furniture_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"tf-visit__card is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group tf-visit__card is-style-white-card"><!-- wp:heading {"className":"tf-h2"} -->
<h2 class="wp-block-heading tf-h2"><?php echo tana_furniture_lines( 'vs_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tf-visit__text"} -->
<p class="tf-visit__text"><?php echo esc_html( tana_furniture_t( 'vs_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-stamp tf-stamp tf-stamp--ink"} -->
<p class="is-style-stamp tf-stamp tf-stamp--ink"><a href="/visit/"><?php echo tana_furniture_lines( 'vs_stamp' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
