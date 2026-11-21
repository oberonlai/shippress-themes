<?php
/**
 * Title: Home: guest stories
 * Slug: kuruma-tabi/front-stories
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with a solid white story panel, then two more stories in two columns.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--stories kt-sec--last","layout":{"type":"default"},"anchor":"stories"} -->
<section id="stories" class="wp-block-group alignfull kt-sec kt-sec--stories kt-sec--last"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'stories_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'stories_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-storyband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kt-storyband sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'family-sunset-road.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kt-panel","layout":{"type":"default"}} -->
<div class="wp-block-group kt-panel"><!-- wp:paragraph {"className":"kt-panel__k"} -->
<p class="kt-panel__k"><?php echo esc_html( kuruma_tabi_t( 'stories_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-panel__q"} -->
<p class="kt-panel__q"><?php echo esc_html( kuruma_tabi_t( 's1_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-panel__w"} -->
<p class="kt-panel__w"><?php echo esc_html( kuruma_tabi_t( 's1_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-two","layout":{"type":"default"}} -->
<div class="wp-block-group kt-two"><!-- wp:group {"className":"kt-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 's2_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-story__w"} -->
<p class="kt-story__w"><?php echo esc_html( kuruma_tabi_t( 's2_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 's3_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-story__w"} -->
<p class="kt-story__w"><?php echo esc_html( kuruma_tabi_t( 's3_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
