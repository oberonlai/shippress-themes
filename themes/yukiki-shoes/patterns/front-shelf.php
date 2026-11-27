<?php
/**
 * Title: Home: shelf parallax band
 * Slug: yukiki-shoes/front-shelf
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Full-bleed shelf photograph with a parallax background and one fixed statement.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"shelf","align":"full","className":"ys-sec ys-sec--bleed","layout":{"type":"default"}} -->
<section id="shelf" class="wp-block-group alignfull ys-sec ys-sec--bleed">
<!-- wp:cover {"url":"<?php echo yukiki_shoes_img( 'p1.webp' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","focalPoint":{"x":0.5,"y":0.6},"contentPosition":"center center","isDark":false,"className":"ys-shelf sp-parallax","style":{"color":{}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ys-shelf sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukiki_shoes_t( 'alt_p1' ) ); ?>" src="<?php echo yukiki_shoes_img( 'p1.webp' ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"ys-shelf__box","layout":{"type":"default"}} -->
<div class="wp-block-group ys-shelf__box">
<!-- wp:paragraph {"className":"ys-shelf__t"} -->
<p class="ys-shelf__t"><?php echo esc_html( yukiki_shoes_t( 'px_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->