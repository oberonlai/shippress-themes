<?php
/**
 * Title: Home: room, hall
 * Slug: kasane-venue/front-room-hall
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-room kv-room--hall kv-room--right kv-wash kv-wash--peach","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-room kv-room--hall kv-room--right kv-wash kv-wash--peach">
<!-- wp:group {"className":"kv-room__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-room__in">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kv-blob kv-blob--c kv-room__fig kv-ratio-16 sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kv-blob kv-blob--c kv-room__fig kv-ratio-16 sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k04.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k04' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kv-room__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-room__text sp-reveal sp-reveal--up">
<!-- wp:heading {"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo wp_kses_post( kasane_venue_t( 'hall_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-room__lead"} -->
<p class="kv-room__lead"><?php echo wp_kses_post( kasane_venue_t( 'hall_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kv-small"} -->
<p class="kv-small"><?php echo wp_kses_post( kasane_venue_t( 'hall_body' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kv-cap"} -->
<p class="kv-cap"><?php echo wp_kses_post( kasane_venue_t( 'hall_cap' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="kv-more"><a href="/rooms/#hall"><?php echo wp_kses_post( kasane_venue_t( 'more' ) ); ?> <svg class="kv-arrow" viewBox="0 0 24 8" width="24" height="8" aria-hidden="true"><path d="M0 4h23M19 .5 23 4l-4 3.500" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
