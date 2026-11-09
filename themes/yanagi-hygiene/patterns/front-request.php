<?php
/**
 * Title: Home: request
 * Slug: yanagi-hygiene/front-request
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Pale band with a bowl-shaped top edge, the single request in a large pentagon tab, then the sticky bottom bar.
 */
?>
<!-- wp:group {"anchor":"request","align":"full","className":"yh-sec yh-request","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-request" id="request"><!-- wp:group {"className":"yh-in yh-request__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in yh-request__grid"><!-- wp:group {"className":"yh-request__media","layout":{"type":"default"}} -->
<div class="wp-block-group yh-request__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yh-ph yh-request__img"} -->
<figure class="wp-block-image size-full yh-ph yh-request__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/i10-desk.webp' ) ); ?>" alt="<?php echo esc_attr( yh_t( 'req_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"yh-request__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yh-request__text sp-reveal sp-reveal--up"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( yh_t( 'req_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"yh-reqlines","layout":{"type":"default"}} -->
<div class="wp-block-group yh-reqlines"><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( 'req1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( 'req2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( yh_t( 'req3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php echo yh_pent( 'l' ); // phpcs:ignore WordPress.Security.EscapeOutput ?><!-- wp:paragraph {"className":"yh-req__desk"} -->
<p class="yh-req__desk"><?php echo esc_html( yh_t( 'req_desk' ) ); ?><br><?php echo esc_html( yh_t( 'req_call' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
