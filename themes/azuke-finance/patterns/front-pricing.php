<?php
/**
 * Title: Home: fees
 * Slug: azuke-finance/front-pricing
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: One full-width fee table and a four-figure worked example.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-pricing","layout":{"type":"default"}} -->
<section id="pricing" class="wp-block-group alignfull az-pricing"><!-- wp:group {"className":"az-pricing__head","layout":{"type":"default"}} -->
<div class="wp-block-group az-pricing__head"><!-- wp:heading {"className":"az-title sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading az-title sp-reveal sp-reveal--mask"><?php echo esc_html( azuke_finance_t( 'p_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-body az-pricing__intro"} -->
<p class="az-body az-pricing__intro"><?php echo esc_html( azuke_finance_t( 'p_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":true,"className":"az-fee"} -->
<figure class="wp-block-table az-fee"><table class="has-fixed-layout"><tbody><?php foreach ( (array) json_decode( azuke_finance_t( 'p_rows' ), true ) as $azr ) : ?><tr><td><?php echo esc_html( $azr[0] ); ?></td><td><?php echo esc_html( $azr[1] ); ?></td><td><?php echo esc_html( $azr[2] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"az-ex","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex"><!-- wp:paragraph {"className":"az-label"} -->
<p class="az-label"><?php echo esc_html( azuke_finance_t( 'p_ex_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"az-ex__figs sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex__figs sp-stagger"><!-- wp:group {"className":"az-ex__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex__fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-ex__n"} -->
<p class="az-ex__n"><?php echo esc_html( azuke_finance_t( 'p_ex1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-ex__t"} -->
<p class="az-ex__t"><?php echo esc_html( azuke_finance_t( 'p_ex1n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-ex__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex__fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-ex__n"} -->
<p class="az-ex__n"><?php echo esc_html( azuke_finance_t( 'p_ex2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-ex__t"} -->
<p class="az-ex__t"><?php echo esc_html( azuke_finance_t( 'p_ex2n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-ex__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex__fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-ex__n"} -->
<p class="az-ex__n"><?php echo esc_html( azuke_finance_t( 'p_ex3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-ex__t"} -->
<p class="az-ex__t"><?php echo esc_html( azuke_finance_t( 'p_ex3n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-ex__fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group az-ex__fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-ex__n"} -->
<p class="az-ex__n"><?php echo esc_html( azuke_finance_t( 'p_ex4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-ex__t"} -->
<p class="az-ex__t"><?php echo esc_html( azuke_finance_t( 'p_ex4n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"az-link"} -->
<p class="az-link"><a href="/apply/"><?php echo esc_html( azuke_finance_t( 'cta_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
