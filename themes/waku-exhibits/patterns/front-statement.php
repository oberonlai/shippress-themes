<?php
/**
 * Title: Home: statement
 * Slug: waku-exhibits/front-statement
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Two-line statement whose letters are filled with a hall-floor photograph, a paragraph and two counted figures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wk-sec wk-statement","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-sec wk-statement"><!-- wp:heading {"level":2,"className":"wk-fill","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size wk-fill"><?php echo wk_lines( 'st_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-statement__cols","layout":{"type":"default"}} -->
<div class="wp-block-group wk-statement__cols"><!-- wp:paragraph {"className":"wk-statement__p sp-reveal sp-reveal--up"} -->
<p class="wk-statement__p sp-reveal sp-reveal--up"><?php echo esc_html( wk_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wk-figs sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group wk-figs sp-stagger"><!-- wp:group {"className":"wk-fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-fig__n sp-count"} -->
<p class="wk-fig__n sp-count">11</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-fig__l"} -->
<p class="wk-fig__l"><?php echo esc_html( wk_t( 'fig_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-fig sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-fig sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-fig__n sp-count"} -->
<p class="wk-fig__n sp-count">5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-fig__l"} -->
<p class="wk-fig__l"><?php echo esc_html( wk_t( 'fig_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
