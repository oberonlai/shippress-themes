<?php
/**
 * Title: Home: how the beer is made here
 * Slug: awa-taproom/front-made-here
 * Categories: awa-taproom
 * Keywords: brewery, taproom, pub
 * Viewport Width: 1440
 * Description: Underlined lead and paragraph on the left, a flush three-photo strip on the right.
 */
?>
<!-- wp:group {"className":"awa-sec awa-made","tagName":"section","align":"full","anchor":"made","layout":{"type":"default"}} -->
<section id="made" class="wp-block-group alignfull awa-sec awa-made"><!-- wp:group {"className":"awa-wrap awa-made__grid","layout":{"type":"default"}} -->
<div class="wp-block-group awa-wrap awa-made__grid">
<!-- wp:group {"className":"awa-made__text","layout":{"type":"default"}} -->
<div class="wp-block-group awa-made__text">
<!-- wp:heading {"level":2,"className":"awa-lead"} -->
<h2 class="wp-block-heading awa-lead"><?php echo wp_kses_post( awa_taproom_t( 'k72a5a772' ) ); ?> <u><?php echo wp_kses_post( awa_taproom_t( 'k2bee45d3' ) ); ?></u><?php echo wp_kses_post( awa_taproom_t( 'k9c9abca2' ) ); ?> <u><?php echo wp_kses_post( awa_taproom_t( 'k872b86ab' ) ); ?></u><br><?php echo wp_kses_post( awa_taproom_t( 'kcf6c855c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"awa-squares"} -->
<p class="awa-squares"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"awa-body"} -->
<p class="awa-body"><?php echo wp_kses_post( awa_taproom_t( 'kd1a08d43' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"awa-link"} -->
<p class="awa-link"><a href="/the-brewery/"><?php echo wp_kses_post( awa_taproom_t( 'k819370a8' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"awa-strip","layout":{"type":"default"}} -->
<div class="wp-block-group awa-strip">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"awa-strip__img"} -->
<figure class="wp-block-image size-full awa-strip__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-barley.webp' ) ); ?>" alt="<?php echo esc_attr( awa_taproom_t( 'acfad2f76' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"awa-strip__img"} -->
<figure class="wp-block-image size-full awa-strip__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s5-hops.webp' ) ); ?>" alt="<?php echo esc_attr( awa_taproom_t( 'a862bf5e0' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"awa-strip__img"} -->
<figure class="wp-block-image size-full awa-strip__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s6-kettle.webp' ) ); ?>" alt="<?php echo esc_attr( awa_taproom_t( 'a94f191f4' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
