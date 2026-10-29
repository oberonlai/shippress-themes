<?php
/**
 * Title: Template: single
 * Slug: yuragi-spa/tpl-single
 * Categories: yuragi-spa
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"yu-main yu-main--wide","layout":{"type":"default"}} -->
<main class="wp-block-group yu-main yu-main--wide"><!-- wp:group {"align":"full","className":"yu-pagehead yu-pagehead--single","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yu-pagehead yu-pagehead--single"><!-- wp:group {"className":"yu-in","layout":{"type":"default"}} -->
<div class="wp-block-group yu-in"><!-- wp:post-terms {"term":"category","className":"yu-bracket"} /-->

<!-- wp:post-title {"level":1,"className":"yu-h yu-h--page yu-h--single"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( yuragi_spa_t( 'date_fmt' ) ); ?>","className":"yu-sub"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yu-sec yu-isec yu-single","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yu-sec yu-isec yu-single"><!-- wp:group {"className":"yu-in","layout":{"type":"default"}} -->
<div class="wp-block-group yu-in"><!-- wp:post-featured-image {"aspectRatio":"4/5","className":"yu-ph yu-single__img"} /-->

<!-- wp:post-content {"className":"yu-single__body","layout":{"type":"default"}} /-->

<!-- wp:buttons {"className":"yu-btns"} -->
<div class="wp-block-buttons yu-btns"><!-- wp:button {"className":"yu-btn-link"} -->
<div class="wp-block-button yu-btn-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( yuragi_spa_t( 'k67bfaf2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"yu-sec yu-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yu-sec yu-close"><!-- wp:group {"className":"yu-in","layout":{"type":"default"}} -->
<div class="wp-block-group yu-in"><!-- wp:columns {"className":"yu-cols"} -->
<div class="wp-block-columns yu-cols"><!-- wp:column {"className":"yu-c7"} -->
<div class="wp-block-column yu-c7"><!-- wp:paragraph {"className":"yu-close__t"} -->
<p class="yu-close__t"><?php echo wp_kses_post( yuragi_spa_t( 'ke5952c2f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yu-close__a"} -->
<p class="yu-close__a"><?php echo wp_kses_post( yuragi_spa_t( 'k58c3a1d1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"yu-c5 yu-endcol"} -->
<div class="wp-block-column yu-c5 yu-endcol"><!-- wp:buttons {"className":"yu-btns yu-btns--close"} -->
<div class="wp-block-buttons yu-btns yu-btns--close"><!-- wp:button {"className":"yu-btn-fill"} -->
<div class="wp-block-button yu-btn-fill"><a class="wp-block-button__link wp-element-button" href="/booking/"><?php echo wp_kses_post( yuragi_spa_t( 'k976f0522' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"yu-btn-link"} -->
<div class="wp-block-button yu-btn-link"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( yuragi_spa_t( 'k635abf65' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->