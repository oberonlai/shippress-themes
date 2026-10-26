<?php
/**
 * Title: Home: parallax photo band
 * Slug: hakari-course/front-practice
 * Categories: hakari-course
 * Keywords: food safety, course, landing
 * Viewport Width: 1440
 * Description: Inset rounded photo band with a parallax layer and a hashtag.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec-band"><!-- wp:group {"className":"hk-bandwrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-bandwrap"><!-- wp:group {"className":"hk-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hk-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/b1-kitchen-wide.webp' ) ); ?>" alt="<?php echo esc_attr( hakari_course_t( 'a1fff4a5f' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:html -->
<div class="hk-hashband hk-hashband--band" aria-hidden="true"><span class="hk-hash">#</span><span class="hk-hw hk-hw--mint"><?php echo wp_kses_post( hakari_course_t( 'k5a9b37d8' ) ); ?></span> <span class="hk-hash">#</span><span class="hk-hw hk-hw--point"><?php echo wp_kses_post( hakari_course_t( 'k921df560' ) ); ?></span></div>
<!-- /wp:html --><!-- wp:paragraph {"className":"hk-band__line"} -->
<p class="hk-band__line"><?php echo wp_kses_post( hakari_course_t( 'kac750031' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
