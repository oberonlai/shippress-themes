<?php
/**
 * Title: Home: approach with stacked heading and two columns
 * Slug: otonoha-acoustics/front-approach
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Description: A three-line heading, a 1px rule and two columns of text on white.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-sec oto-approach","anchor":"approach","layout":{"type":"default"}} -->
<section id="approach" class="wp-block-group alignfull oto-sec oto-approach"><!-- wp:group {"className":"oto-wrap oto-approach__grid","layout":{"type":"default"}} -->
<div class="wp-block-group oto-wrap oto-approach__grid"><!-- wp:heading {"level":2,"className":"oto-approach__h"} -->
<h2 class="wp-block-heading oto-approach__h"><?php echo otonoha_acoustics_lines( 'ap_h' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"oto-approach__rule","layout":{"type":"default"}} -->
<div class="wp-block-group oto-approach__rule"></div>
<!-- /wp:group --><!-- wp:group {"className":"oto-approach__cols","layout":{"type":"default"}} -->
<div class="wp-block-group oto-approach__cols"><!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'ap_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'ap_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
