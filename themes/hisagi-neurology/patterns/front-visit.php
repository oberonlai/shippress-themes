<?php
/**
 * Title: Home: where we are
 * Slug: hisagi-neurology/front-visit
 * Categories: hisagi-neurology
 * Viewport Width: 1440
 * Description: A horizontal stadium pill holding the clinic entrance, with a white card overlapping its lower right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hn-sec hn-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-sec hn-visit"><!-- wp:group {"className":"hn-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group hn-visit__in"><!-- wp:group {"className":"hn-visit__pill","layout":{"type":"default"}} -->
<div class="wp-block-group hn-visit__pill"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1248,"height":832} -->
<figure class="wp-block-image size-full"><img src="<?php echo hisagi_neurology_img( 'entrance.webp' ); ?>" alt="<?php echo esc_attr( hisagi_neurology_t( 'a12c9bf38' ) ); ?>" width="1248" height="832"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-visit__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hn-visit__card sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"hn-card__t"} -->
<h3 class="wp-block-heading hn-card__t"><?php echo wp_kses_post( hisagi_neurology_t( 'k968ea00b' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'k5044ca69' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hn-textlink"} -->
<p class="hn-textlink"><a href="/visit/"><?php echo wp_kses_post( hisagi_neurology_t( 'kf8ac853c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
