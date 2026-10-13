<?php
/**
 * Title: Subscribe: rates and where it comes from
 * Slug: shiori-review/subscribe-main
 * Categories: shiori-review
 * Keywords: literary magazine, journal
 * Viewport Width: 1440
 * Description: A wide photograph, then the synced subscription and submissions source (subscription first on this page) and the synced magazine details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-subscribe-photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-subscribe-photo"><!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"sr-photo sr-photo--band"} -->
<figure class="wp-block-image alignwide size-large sr-photo sr-photo--band"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/subscription.jpg' ) ); ?>" alt="Plain envelopes and a red pencil on a pale table, ready for dispatch day"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-subscribe","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-subscribe"><!-- wp:group {"align":"wide","className":"sr-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-split"><!-- wp:group {"className":"sr-split__aside","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__aside"><!-- wp:paragraph {"className":"sr-mark"} -->
<p class="sr-mark">Rates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__main"><!-- wp:pattern {"slug":"shiori-review/rates"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-section--last sr-card-wrap","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-section--last sr-card-wrap"><!-- wp:group {"align":"wide","className":"sr-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-split"><!-- wp:group {"className":"sr-split__aside","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__aside"><!-- wp:paragraph {"className":"sr-mark"} -->
<p class="sr-mark">Where it comes from</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__main"><!-- wp:pattern {"slug":"shiori-review/details"} /-->

<!-- wp:paragraph {"className":"sr-small"} -->
<p class="sr-small">To change an address or pause a subscription, write with the name on the sleeve. We answer letters on Tuesdays and Fridays.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
