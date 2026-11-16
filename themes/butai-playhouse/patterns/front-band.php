<?php
/**
 * Title: Home: rehearsal room parallax band
 * Slug: butai-playhouse/front-band
 * Categories: butai-playhouse
 * Viewport Width: 1440
 * Description: Inset wide photograph with a slow parallax and a two-line caps statement on a static layer.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bp-section bp-bandwrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-section bp-bandwrap"><!-- wp:group {"className":"bp-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group bp-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rehearsal-room.webp' ) ); ?>" alt="<?php echo esc_attr( butai_playhouse_t( 'ada5d5fb7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bp-band__shade","layout":{"type":"default"}} -->
<div class="wp-block-group bp-band__shade"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-band__text","layout":{"type":"default"}} -->
<div class="wp-block-group bp-band__text"><!-- wp:paragraph {"className":"bp-band__h"} -->
<p class="bp-band__h"><?php echo wp_kses_post( butai_playhouse_t( 'k268d4439' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bp-band__p"} -->
<p class="bp-band__p"><?php echo wp_kses_post( butai_playhouse_t( 'k8dc486c0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
