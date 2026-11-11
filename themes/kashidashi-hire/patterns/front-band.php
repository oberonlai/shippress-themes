<?php
/**
 * Title: Home: parallax band
 * Slug: kashidashi-hire/front-band
 * Categories: kashidashi-hire
 * Description: Full-bleed night-return photograph with one sentence from the yard coordinator.
 */
?>
<!-- wp:cover {"url":"<?php echo kashidashi_hire_img( 'p15-night-return' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>","dimRatio":30,"overlayColor":"ink","minHeight":520,"minHeightUnit":"px","align":"full","className":"sp-parallax kh-band"} -->
<div class="wp-block-cover alignfull sp-parallax kh-band" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p15' ) ); ?>" src="<?php echo kashidashi_hire_img( 'p15-night-return' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kh-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-band__in"><!-- wp:quote {"className":"kh-band__quote"} -->
<blockquote class="wp-block-quote kh-band__quote"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'bd_quote' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( kashidashi_hire_t( 'bd_who' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
