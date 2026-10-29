<?php
/**
 * Title: Home: framed cover
 * Slug: getsuji-payroll/front-kv
 * Categories: getsuji-payroll
 * Keywords: hero, cover, first screen
 * Viewport Width: 1440
 * Description: Full-bleed photograph cut by a white message panel and a white info bar; the navy logo panel sits flush left in the header. The photograph drifts slowly behind the fixed frames.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"gp-kv sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull gp-kv sp-parallax" style="padding-top:0;padding-bottom:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gp-ph gp-ph--k1 gp-kv__photo"} -->
<figure class="wp-block-image size-full gp-ph gp-ph--k1 gp-kv__photo"><img src="<?php echo esc_url( getsuji_payroll_img( 'k1' ) ); ?>" alt="<?php $gp_alts = getsuji_payroll_alts(); echo esc_attr( isset( $gp_alts[ 'k1' ] ) ? $gp_alts[ 'k1' ] : '' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gp-kv__panel","layout":{"type":"default"}} -->
<div class="wp-block-group gp-kv__panel"><!-- wp:paragraph {"className":"gp-label gp-label--sm"} -->
<p class="gp-label gp-label--sm"><?php echo wp_kses_post( getsuji_payroll_t( 'ka02a593f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"gp-kv__h1"} -->
<h1 class="wp-block-heading gp-kv__h1"><?php echo wp_kses_post( getsuji_payroll_t( 'kf3f7a295' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gp-kv__lede"} -->
<p class="gp-kv__lede"><?php echo wp_kses_post( getsuji_payroll_t( 'k0b3eb8b0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"gp-kv__cta"} -->
<div class="wp-block-buttons gp-kv__cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#request' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'ke59f9a27' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-kv__bar","layout":{"type":"default"}} -->
<div class="wp-block-group gp-kv__bar"><!-- wp:paragraph {"className":"gp-kv__more"} -->
<p class="gp-kv__more"><a href="<?php echo esc_url( home_url( '/#month' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'k0a1d0929' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-kv__count"} -->
<p class="gp-kv__count"><span class="gp-kv__num"><b>20</b><i><?php echo wp_kses_post( getsuji_payroll_t( 'k716f6b30' ) ); ?></i></span><span class="gp-kv__slash"></span><span class="gp-kv__num"><b>25</b><i><?php echo wp_kses_post( getsuji_payroll_t( 'k2aa389b3' ) ); ?></i></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gp-kv__credit"} -->
<p class="gp-kv__credit"><?php echo wp_kses_post( getsuji_payroll_t( 'kdf43c1a5' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
