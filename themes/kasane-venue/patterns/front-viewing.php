<?php
/**
 * Title: Home: request a viewing
 * Slug: kasane-venue/front-viewing
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-view","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-view">
<!-- wp:group {"className":"kv-view__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-view__in sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kv-view__img"} -->
<figure class="wp-block-image size-full kv-view__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k12.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k12' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kv-view__panel kv-wash--sage","layout":{"type":"default"}} -->
<div class="wp-block-group kv-view__panel kv-wash--sage">
<!-- wp:paragraph {"className":"kv-chip"} -->
<p class="kv-chip"><?php echo wp_kses_post( kasane_venue_t( 'view_chip' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"kv-view__h"} -->
<h2 class="wp-block-heading kv-view__h"><?php echo wp_kses_post( kasane_venue_t( 'view_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-small"} -->
<p class="kv-small"><?php echo wp_kses_post( kasane_venue_t( 'view_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="kv-view__link"><a href="/viewings/"><?php echo wp_kses_post( kasane_venue_t( 'view_link' ) ); ?></a></p>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kv-meta kv-view__hours"} -->
<p class="kv-meta kv-view__hours"><?php echo wp_kses_post( kasane_venue_t( 'view_hours' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
