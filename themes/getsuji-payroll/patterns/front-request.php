<?php
/**
 * Title: Home: request a consultation
 * Slug: getsuji-payroll/front-request
 * Categories: getsuji-payroll
 * Keywords: contact, request, cta
 * Viewport Width: 1440
 * Description: A full-bleed parallax photograph with a white panel cut into it over a dot grid: the single request.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"request","className":"gp-request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull gp-request"><!-- wp:cover {"url":"<?php echo esc_url( getsuji_payroll_img( 'p8' ) ); ?>","dimRatio":0,"minHeight":700,"isDark":false,"align":"full","className":"gp-request__cover sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light gp-request__cover sp-parallax" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( getsuji_payroll_alts()['p8'] ); ?>" src="<?php echo esc_url( getsuji_payroll_img( 'p8' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"gp-request__spacer"} -->
<p class="gp-request__spacer"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"gp-request__box","layout":{"type":"default"}} -->
<div class="wp-block-group gp-request__box"><!-- wp:group {"className":"gp-dots sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group gp-dots sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-request__panel sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gp-request__panel sp-stagger"><!-- wp:paragraph {"className":"gp-label sp-reveal sp-reveal--up"} -->
<p class="gp-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'ke9b915f8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"gp-slogan sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading gp-slogan sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kc8087efa' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'k99414bf5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-request__addr sp-reveal sp-reveal--up"} -->
<p class="gp-request__addr"><?php echo wp_kses_post( getsuji_payroll_t( 'kb5b88800' ) ); ?> <a href="tel:+3290001425">+32 9 000 14 25</a> · <a href="mailto:hello@getsuji-payroll.example"><?php echo wp_kses_post( getsuji_payroll_t( 'k63f4aa99' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons sp-reveal sp-reveal--up"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/request/' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'ke59f9a27' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
