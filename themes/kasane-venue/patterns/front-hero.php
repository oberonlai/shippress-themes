<?php
/**
 * Title: Home: blob window hero
 * Slug: kasane-venue/front-hero
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-hero","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-hero">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kv-blob kv-blob--a kv-blob--hero"} -->
<figure class="wp-block-image size-full kv-blob kv-blob--a kv-blob--hero"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k01.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k01' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kv-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kv-hero__text">
<!-- wp:heading {"level":1,"className":"kv-h1"} -->
<h1 class="wp-block-heading kv-h1"><?php echo wp_kses_post( kasane_venue_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-lead"} -->
<p class="kv-lead"><?php echo wp_kses_post( kasane_venue_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="kv-toast" href="/viewings/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k13.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k13' ) ); ?>" width="90" height="90" loading="lazy"/><span class="kv-toast__t"><span class="kv-toast__meta"><?php echo wp_kses_post( kasane_venue_t( 'toast_meta' ) ); ?></span><span class="kv-toast__title"><?php echo wp_kses_post( kasane_venue_t( 'toast_title' ) ); ?></span></span></a>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
