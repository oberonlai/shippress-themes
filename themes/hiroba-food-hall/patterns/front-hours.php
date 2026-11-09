<?php
/**
 * Title: Home: today’s hours
 * Slug: hiroba-food-hall/front-hours
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Today’s hours strip with a vertical hairline, three icon links and the convex arc into white.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-hours","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-hours"><!-- wp:group {"className":"hb-hours__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours__in"><!-- wp:group {"className":"hb-today","layout":{"type":"default"}} -->
<div class="wp-block-group hb-today"><!-- wp:paragraph {"className":"hb-today__l"} -->
<p class="hb-today__l"><?php echo esc_html( hiroba_t( 'today_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-today__fig"} -->
<p class="hb-today__fig"><?php echo esc_html( hiroba_t( 'today_fig' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-today__note"} -->
<p class="hb-today__note"><?php echo esc_html( hiroba_t( 'today_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-vrule","layout":{"type":"default"}} -->
<div class="wp-block-group hb-vrule"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-ilinks","layout":{"type":"default"}} -->
<div class="wp-block-group hb-ilinks"><!-- wp:group {"className":"hb-ilink","layout":{"type":"default"}} -->
<div class="wp-block-group hb-ilink"><!-- wp:html -->
<svg class="hb-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 13h22a11 9 0 0 1-11 9A11 9 0 0 1 3 13z"/><path d="M10 9c-1-1.5 1-2.5 0-4M15 9c-1-1.5 1-2.5 0-4"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-ilink__t"} -->
<p class="hb-ilink__t"><a href="/kitchens/"><?php echo esc_html( hiroba_t( 'il_kitchens' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-ilink","layout":{"type":"default"}} -->
<div class="wp-block-group hb-ilink"><!-- wp:html -->
<svg class="hb-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 10h22M5 10v12M23 10v12M9 10V6h10v4"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-ilink__t"} -->
<p class="hb-ilink__t"><a href="/tables/"><?php echo esc_html( hiroba_t( 'il_table' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-ilink","layout":{"type":"default"}} -->
<div class="wp-block-group hb-ilink"><!-- wp:html -->
<svg class="hb-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 25s8-7.2 8-13.5A8 8 0 0 0 6 11.5C6 17.800 14 25 14 25z"/><circle cx="14" cy="11.5" r="2.8"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-ilink__t"} -->
<p class="hb-ilink__t"><a href="/visit/"><?php echo esc_html( hiroba_t( 'il_find' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-arc","layout":{"type":"default"}} -->
<div class="wp-block-group hb-arc"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
