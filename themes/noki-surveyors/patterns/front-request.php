<?php
/**
 * Title: Home: request band
 * Slug: noki-surveyors/front-request
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: Dark ink closing band with the one call to action and the contact lines.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"request","align":"full","className":"nk-sec nk-sec--request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull nk-sec nk-sec--request">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-request","layout":{"type":"default"}} -->
<div class="wp-block-group nk-request">
<!-- wp:group {"className":"nk-request__l","layout":{"type":"default"}} -->
<div class="wp-block-group nk-request__l">
<!-- wp:heading {"level":2,"className":"nk-request__h"} -->
<h2 class="wp-block-heading nk-request__h"><?php echo esc_html( noki_surveyors_t( 'rq_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-request__p"} -->
<p class="nk-request__p"><?php echo esc_html( noki_surveyors_t( 'rq_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"nk-btns"} -->
<div class="wp-block-buttons nk-btns">
<!-- wp:button {"className":"nk-btn nk-btn--inv"} -->
<div class="wp-block-button nk-btn nk-btn--inv"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( noki_surveyors_t( 'btn_request' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<dl class="nk-contact"><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_e' ) ); ?></dt><dd><a href="mailto:hello@noki-surveyors.example">hello@noki-surveyors.example</a></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_t' ) ); ?></dt><dd><a href="tel:+00315550148">+00 31 555 0148</a></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_d' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_dv' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_v' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_vv' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_o' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_ov' ) ); ?></dd></div><div><dt><?php echo esc_html( noki_surveyors_t( 'rq_a' ) ); ?></dt><dd><?php echo esc_html( noki_surveyors_t( 'rq_av' ) ); ?></dd></div></dl>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
