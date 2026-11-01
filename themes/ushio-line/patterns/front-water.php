<?php
/**
 * Title: Home: water
 * Slug: ushio-line/front-water
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: An inset huge-radius photograph of flat water with a slow parallax and one static line of text at the lower left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-watersec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-watersec"><!-- wp:cover {"url":"<?php echo ushio_line_img( 'w2-crossing.webp' ); ?>","dimRatio":20,"overlayColor":"ink","minHeight":640,"minHeightUnit":"px","contentPosition":"bottom left","className":"ul-water sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left ul-water sp-parallax" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( ushio_line_t( 'alt_w2' ) ); ?>" src="<?php echo ushio_line_img( 'w2-crossing.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ul-water__line"} -->
<p class="ul-water__line"><?php echo esc_html( ushio_line_t( 'wt_text' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
