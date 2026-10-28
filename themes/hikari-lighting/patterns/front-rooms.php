<?php
/**
 * Title: Home: which room is it for
 * Slug: hikari-lighting/front-rooms
 * Categories: hikari-lighting
 * Description: Project rows: a mono title line, then a 2:1 room photo that wipes in; three text-only room rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-section hl-rooms","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-section hl-rooms"><!-- wp:group {"className":"hl-wrap hl-rooms__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-rooms__head"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'k21602c58' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2"><?php echo wp_kses_post( hikari_lighting_t( 'kb911367c' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-wrap hl-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-prow"><!-- wp:paragraph {"className":"hl-prow__title hl-mono hl-arrow"} -->
<p class="hl-prow__title hl-mono hl-arrow"><a href="/rooms/"><?php echo wp_kses_post( hikari_lighting_t( 'k1e12a0b3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-prow__img sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hl-prow__img sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/hl-03-dining.webp' ) ); ?>" alt="<?php echo esc_attr( hikari_lighting_t( 'abfa11381' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hl-prow__note"} -->
<p class="hl-prow__note"><?php echo wp_kses_post( hikari_lighting_t( 'k3ace5469' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-wrap hl-prow","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-prow"><!-- wp:paragraph {"className":"hl-prow__title hl-mono hl-arrow"} -->
<p class="hl-prow__title hl-mono hl-arrow"><a href="/rooms/"><?php echo wp_kses_post( hikari_lighting_t( 'kbde38512' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-prow__img sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hl-prow__img sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/hl-04-reading.webp' ) ); ?>" alt="<?php echo esc_attr( hikari_lighting_t( 'a4a40721c' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hl-prow__note"} -->
<p class="hl-prow__note"><?php echo wp_kses_post( hikari_lighting_t( 'k505d05e9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-wrap hl-rooms__list","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wrap hl-rooms__list"><!-- wp:paragraph {"className":"hl-mono hl-arrow hl-rooms__item"} -->
<p class="hl-mono hl-arrow hl-rooms__item"><a href="/rooms/#living"><?php echo wp_kses_post( hikari_lighting_t( 'k4d433943' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-mono hl-arrow hl-rooms__item"} -->
<p class="hl-mono hl-arrow hl-rooms__item"><a href="/rooms/#halls"><?php echo wp_kses_post( hikari_lighting_t( 'kd20a7aaf' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-mono hl-arrow hl-rooms__item"} -->
<p class="hl-mono hl-arrow hl-rooms__item"><a href="/rooms/#kitchen"><?php echo wp_kses_post( hikari_lighting_t( 'k572080c4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
