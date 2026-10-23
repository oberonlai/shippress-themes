<?php
/**
 * Title: Template: single
 * Slug: hoshi-wealth-partners/tpl-single
 * Categories: hoshi-wealth-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hp-main hp-main--single","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group hp-main hp-main--single"><!-- wp:group {"className":"hp-in hp-sing","layout":{"type":"default"}} -->
<div class="wp-block-group hp-in hp-sing"><!-- wp:group {"className":"hp-sing__meta","layout":{"type":"default"}} --><div class="wp-block-group hp-sing__meta"><!-- wp:post-terms {"term":"category","className":"hp-label"} /--><!-- wp:post-date {"format":"Y.m.d","className":"hp-sing__date"} /--></div><!-- /wp:group --><!-- wp:post-title {"level":1,"className":"hp-sing__title"} /--><!-- wp:group {"className":"hp-sing__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-sing__grid"><!-- wp:group {"className":"hp-sing__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-sing__text"><!-- wp:post-content {"layout":{"type":"default"}} /--><!-- wp:paragraph {"className":"hp-go hp-single__back"} -->
<p class="hp-go hp-single__back"><a href="/letters/"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'single_back' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-sing__frame","layout":{"type":"default"}} -->
<div class="wp-block-group hp-sing__frame"><!-- wp:post-featured-image {"aspectRatio":"4/5","className":"hp-sing__img"} /--><!-- wp:group {"className":"hp-block","layout":{"type":"default"}} -->
<div class="wp-block-group hp-block"><!-- wp:html -->
<span class="hp-dots" aria-hidden="true"><i></i><i></i><i></i></span>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
