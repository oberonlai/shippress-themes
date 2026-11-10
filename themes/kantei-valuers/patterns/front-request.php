<?php
/**
 * Title: Home: request band with a photo strip
 * Slug: kantei-valuers/front-request
 * Categories: kantei-valuers
 * Keywords: contact, request, call to action
 * Viewport Width: 1440
 * Description: Lead band 440 px tall with a strip of three tall photographs flush to the window's left edge rising 40 px above it, a large phone figure, the hours and the one accent pill, and a white page-top disc on the bottom edge.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"request","className":"kv-request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull kv-request"><!-- wp:group {"className":"kv-strip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-strip sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'h11-desk-phone.webp' ); ?>" alt="<?php echo $a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'h12-street-phone.webp' ); ?>" alt="<?php echo $a( 'alt_s2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $i( 'h13-editor-headset.webp' ); ?>" alt="<?php echo $a( 'alt_s3' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-request__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-request__body sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label kv-label--light"} -->
<p class="kv-label kv-label--light"><?php echo $e( 'req_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2 kv-h2--light"} -->
<h2 class="wp-block-heading kv-h2 kv-h2--light"><?php echo $e( 'cta' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-request__line"} -->
<p class="kv-request__line"><?php echo $e( 'req_line' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kv-request__row","layout":{"type":"default"}} -->
<div class="wp-block-group kv-request__row"><!-- wp:group {"className":"kv-request__phone","layout":{"type":"default"}} -->
<div class="wp-block-group kv-request__phone"><!-- wp:paragraph {"className":"kv-request__pl"} -->
<p class="kv-request__pl"><?php echo $e( 'req_phone_l' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-request__num"} -->
<p class="kv-request__num"><a href="tel:+35310000611"><?php echo $e( 'req_phone' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-request__pl"} -->
<p class="kv-request__pl"><?php echo $e( 'req_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kv-request__cta"} -->
<div class="wp-block-buttons kv-request__cta"><!-- wp:button {"className":"kv-pill"} -->
<div class="wp-block-button kv-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo $e( 'cta' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="kv-top" href="#top"><span class="kv-top__arrow" aria-hidden="true"></span><span class="kv-top__t"><?php echo $e( 'top' ); ?></span></a>
<!-- /wp:html --></section>
<!-- /wp:group -->
