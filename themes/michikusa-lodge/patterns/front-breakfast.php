<?php
/**
 * Title: Home: early breakfast band
 * Slug: michikusa-lodge/front-breakfast
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Full-width parallax photograph of the 05:30 breakfast counter with three centred white lines.
 */
?>
<!-- wp:cover {"url":"<?php echo michikusa_lodge_img( 'p08-breakfast-counter.webp' ); ?>","alt":"<?php echo michikusa_lodge_a( 'alt_p08' ); ?>","dimRatio":40,"overlayColor":"ink","minHeight":640,"minHeightUnit":"px","className":"ml-bf sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover ml-bf sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo michikusa_lodge_a( 'alt_p08' ); ?>" src="<?php echo michikusa_lodge_img( 'p08-breakfast-counter.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":2,"className":"ml-bf__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ml-bf__h sp-reveal sp-reveal--up"><?php echo esc_html( michikusa_lodge_t( 'bf_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-bf__l"} -->
<p class="ml-bf__l"><?php echo michikusa_lodge_lines( 'bf_l' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
