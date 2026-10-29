<?php
/**
 * Title: Home: about
 * Slug: getsuji-payroll/front-about
 * Categories: getsuji-payroll
 * Keywords: about, story
 * Viewport Width: 1440
 * Description: A 3:2 photograph over an offset dot grid at the left, the closing-day story at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"gp-about gp-section","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull gp-about gp-section"><!-- wp:group {"className":"gp-about__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-about__inner"><!-- wp:group {"className":"gp-photo gp-photo--about","layout":{"type":"default"}} -->
<div class="wp-block-group gp-photo gp-photo--about"><!-- wp:group {"className":"gp-dots sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group gp-dots sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gp-ph gp-ph--p2 gp-photo__img"} -->
<figure class="wp-block-image size-full gp-ph gp-ph--p2 gp-photo__img"><img src="<?php echo esc_url( getsuji_payroll_img( 'p2' ) ); ?>" alt="<?php $gp_alts = getsuji_payroll_alts(); echo esc_attr( isset( $gp_alts[ 'p2' ] ) ? $gp_alts[ 'p2' ] : '' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-about__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gp-about__text sp-stagger"><!-- wp:paragraph {"className":"gp-label sp-reveal sp-reveal--up"} -->
<p class="gp-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kff1ae3f3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"gp-slogan sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading gp-slogan sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kcfd1d46f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kb63f7710' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'k3fcdf0fb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons sp-reveal sp-reveal--up"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/the-bureau/' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'k031bb7c9' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
