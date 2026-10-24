<?php
/**
 * Title: Journal: page head with white title tiles and intro
 * Slug: daichi-landscapes/journal-head
 * Categories: daichi-landscapes
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"dl-hero__top dl-phead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull dl-hero__top dl-phead">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-median.webp' ) ); ?>","dimRatio":0,"minHeight":360,"minHeightUnit":"px","isDark":false,"className":"dl-cover dl-cover--head sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light dl-cover dl-cover--head sp-parallax" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( daichi_landscapes_t( 'alt_p8' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-median.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:heading {"level":1,"className":"dl-tiles dl-tiles--head"} -->
<h1 class="wp-block-heading dl-tiles dl-tiles--head"><span class="dl-tile dl-tile--1"><?php echo esc_html( daichi_landscapes_t( 'jr_t1' ) ); ?></span><span class="dl-tile dl-tile--2"><?php echo esc_html( daichi_landscapes_t( 'jr_t2' ) ); ?></span></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-sec dl-sec--in dl-sec--lead","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull dl-sec dl-sec--in dl-sec--lead">
<!-- wp:group {"className":"dl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group dl-wrap">
<!-- wp:group {"className":"dl-leadbox","layout":{"type":"default"}} -->
<div class="wp-block-group dl-leadbox">
<!-- wp:paragraph {"className":"dl-lead sp-reveal sp-reveal--up"} -->
<p class="dl-lead sp-reveal sp-reveal--up"><?php echo esc_html( daichi_landscapes_t( 'jr_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( daichi_landscapes_t( 'jr_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
