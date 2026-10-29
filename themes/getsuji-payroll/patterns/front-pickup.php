<?php
/**
 * Title: Home: one firm's month
 * Slug: getsuji-payroll/front-pickup
 * Categories: getsuji-payroll
 * Keywords: pick up, case, month
 * Viewport Width: 1440
 * Description: A large photograph at the right over a dot grid, a thin oversized 01 overlapping its left edge, three dated paragraphs at the left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"month","className":"gp-pickup gp-section","layout":{"type":"default"}} -->
<section id="month" class="wp-block-group alignfull gp-pickup gp-section"><!-- wp:group {"className":"gp-pickup__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-pickup__inner"><!-- wp:group {"className":"gp-photo gp-photo--pickup","layout":{"type":"default"}} -->
<div class="wp-block-group gp-photo gp-photo--pickup"><!-- wp:group {"className":"gp-dots sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group gp-dots sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-pxwrap sp-parallax","style":{"dimensions":{"aspectRatio":"3/2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group gp-pxwrap sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gp-ph gp-ph--p6 gp-photo__img"} -->
<figure class="wp-block-image size-full gp-ph gp-ph--p6 gp-photo__img"><img src="<?php echo esc_url( getsuji_payroll_img( 'p6' ) ); ?>" alt="<?php $gp_alts = getsuji_payroll_alts(); echo esc_attr( isset( $gp_alts[ 'p6' ] ) ? $gp_alts[ 'p6' ] : '' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gp-numeral"} -->
<p class="gp-numeral"><em><?php echo wp_kses_post( getsuji_payroll_t( 'ke3cf48bb' ) ); ?></em><b>01</b></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-pickup__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gp-pickup__text sp-stagger"><!-- wp:paragraph {"className":"gp-label sp-reveal sp-reveal--up"} -->
<p class="gp-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'kb43d8a56' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><strong><?php echo wp_kses_post( getsuji_payroll_t( 'k8913ffc6' ) ); ?></strong> <?php echo wp_kses_post( getsuji_payroll_t( 'k3d317d33' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><strong><?php echo wp_kses_post( getsuji_payroll_t( 'k623a7d1c' ) ); ?></strong> <?php echo wp_kses_post( getsuji_payroll_t( 'kd824fae5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><strong><?php echo wp_kses_post( getsuji_payroll_t( 'kfbbf1727' ) ); ?></strong> <?php echo wp_kses_post( getsuji_payroll_t( 'k94fee211' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons sp-reveal sp-reveal--up"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/accounts/' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'k171bbb9a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
