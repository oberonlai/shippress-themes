<?php
/**
 * Title: Home: where you start
 * Slug: kotoba-language/front-levels
 * Categories: kotoba-language
 * Description: Horizontal hairline CEFR scale with six ticks.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-sec kl-levels","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group kl-sec kl-levels"><!-- wp:group {"className":"kl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'levels_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'levels_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-lede kl-lede--narrow"} -->
<p class="kl-lede kl-lede--narrow"><?php echo esc_html( kotoba_language_t( 'levels_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kl-scale" aria-label="CEFR"><li>A1</li><li>A2</li><li>B1</li><li>B2</li><li>C1</li><li>C2</li></ol>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="/levels-placement/"><?php echo esc_html( kotoba_language_t( 'levels_cta' ) ); ?> →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->