<?php
/**
 * Title: Home: the line
 * Slug: ushio-line/front-line
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: Flush split row: a square-cut photograph at the viewport edge, the copy beside it and a sea-texture photograph floating lower right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ul-sec ul-line","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ul-sec ul-line"><!-- wp:group {"className":"ul-split","layout":{"type":"default"}} -->
<div class="wp-block-group ul-split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-split__photo sp-reveal sp-reveal--left"} -->
<figure class="wp-block-image size-full ul-split__photo sp-reveal sp-reveal--left"><img src="<?php echo ushio_line_img( 'b1-bow.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_b1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ul-split__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ul-split__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ul-label"} -->
<p class="ul-label"><?php echo esc_html( ushio_line_t( 'ln_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ul-h"} -->
<h2 class="wp-block-heading ul-h"><?php echo esc_html( ushio_line_t( 'ln_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'ln_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ushio_line_t( 'ln_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ul-split__float sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ul-split__float sp-reveal sp-reveal--up"><img src="<?php echo ushio_line_img( 'w1-wake.webp' ); ?>" alt="<?php echo esc_attr( ushio_line_t( 'alt_w1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo ushio_line_ticks( array( array( 47, 8, 70 ), array( 93, 52, 35 ), array( 40, 92, 140 ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html --></section>
<!-- /wp:group -->
