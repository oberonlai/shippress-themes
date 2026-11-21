<?php
/**
 * Title: Home: the one way to buy tickets
 * Slug: yunagi-jazz/front-buy
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Dark ink sheet: how to buy, the four-line process and a three-line price summary with the ticket stub.
 */
?>
<!-- wp:group {"className":"yj-sheet yj-sheet--ink","layout":{"type":"default"},"tagName":"section","anchor":"buy"} -->
<section id="buy" class="wp-block-group yj-sheet yj-sheet--ink">
<!-- wp:group {"className":"yj-buy","layout":{"type":"default"}} -->
<div class="wp-block-group yj-buy">
<!-- wp:group {"className":"yj-buy__l","layout":{"type":"default"}} -->
<div class="wp-block-group yj-buy__l">
<!-- wp:group {"className":"yj-buy__head","layout":{"type":"default"}} -->
<div class="wp-block-group yj-buy__head">
<!-- wp:heading {"level":2,"className":"yj-buy__t"} -->
<h2 class="wp-block-heading yj-buy__t"><?php echo esc_html( yunagi_jazz_t( 'buy_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yj-tab"} -->
<p class="yj-tab"><?php echo esc_html( yunagi_jazz_t( 'buy_tab' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-buy__p"} -->
<p class="yj-buy__p"><?php echo esc_html( yunagi_jazz_t( 'buy_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yj-proc","layout":{"type":"default"}} -->
<div class="wp-block-group yj-proc">
<!-- wp:paragraph {"className":"yj-proc__l"} -->
<p class="yj-proc__l"><span class="yj-proc__n">1</span><span><?php echo esc_html( yunagi_jazz_t( 'buy_s1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-proc__l"} -->
<p class="yj-proc__l"><span class="yj-proc__n">2</span><span><?php echo esc_html( yunagi_jazz_t( 'buy_s2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-proc__l"} -->
<p class="yj-proc__l"><span class="yj-proc__n">3</span><span><?php echo esc_html( yunagi_jazz_t( 'buy_s3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-proc__l"} -->
<p class="yj-proc__l"><span class="yj-proc__n">4</span><span><?php echo esc_html( yunagi_jazz_t( 'buy_s4' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-buy__r","layout":{"type":"default"}} -->
<div class="wp-block-group yj-buy__r">
<!-- wp:group {"className":"yj-prices","layout":{"type":"default"}} -->
<div class="wp-block-group yj-prices">
<!-- wp:paragraph {"className":"yj-price"} -->
<p class="yj-price"><span><?php echo esc_html( yunagi_jazz_t( 'buy_pn1' ) ); ?></span><span class="yj-price__v"><?php echo esc_html( yunagi_jazz_t( 'buy_pv1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-price"} -->
<p class="yj-price"><span><?php echo esc_html( yunagi_jazz_t( 'buy_pn2' ) ); ?></span><span class="yj-price__v"><?php echo esc_html( yunagi_jazz_t( 'buy_pv2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-price"} -->
<p class="yj-price"><span><?php echo esc_html( yunagi_jazz_t( 'buy_pn3' ) ); ?></span><span class="yj-price__v"><?php echo esc_html( yunagi_jazz_t( 'buy_pv3' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-buy__hours"} -->
<p class="yj-buy__hours"><?php echo esc_html( yunagi_jazz_t( 'buy_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yj-stubwrap"} -->
<div class="wp-block-buttons yj-stubwrap"><!-- wp:button {"className":"yj-stub"} -->
<div class="wp-block-button yj-stub"><a class="wp-block-button__link wp-element-button" href="/tickets/"><?php echo esc_html( yunagi_jazz_t( 'buy_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
