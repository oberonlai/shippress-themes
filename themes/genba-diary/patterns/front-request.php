<?php
/**
 * Title: Home: request band
 * Slug: genba-diary/front-request
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Steel band that closes the page with a white heading, one line, the request button and the phone line.
 */
?>
<!-- wp:group {"className":"gd-request","layout":{"type":"default"},"tagName":"section","anchor":"request","align":"full"} -->
<section id="request" class="wp-block-group alignfull gd-request"><!-- wp:group {"className":"gd-wrap gd-center","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap gd-center"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe gd-sechead--c gd-sechead--light","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe gd-sechead--c gd-sechead--light"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_request' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'request_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-request__p sp-reveal sp-reveal--up"} -->
<p class="gd-request__p sp-reveal sp-reveal--up"><?php echo esc_html( genba_diary_t( 'request_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"gd-cta-wrap"} -->
<div class="wp-block-buttons gd-cta-wrap"><!-- wp:button {"className":"gd-cta"} -->
<div class="wp-block-button gd-cta"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( genba_diary_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"gd-request__call"} -->
<p class="gd-request__call"><?php echo esc_html( genba_diary_t( 'request_call' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
