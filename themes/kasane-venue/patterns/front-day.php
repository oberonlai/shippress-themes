<?php
/**
 * Title: Home: the day as it runs
 * Slug: kasane-venue/front-day
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-day","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-day">
<!-- wp:group {"className":"kv-day__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-day__in">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kv-blob kv-blob--c kv-day__fig sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kv-blob kv-blob--c kv-day__fig sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k07.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k07' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kv-day__text","layout":{"type":"default"}} -->
<div class="wp-block-group kv-day__text">
<!-- wp:heading {"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo wp_kses_post( kasane_venue_t( 'day_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-body kv-day__p sp-reveal sp-reveal--up"} -->
<p class="kv-body kv-day__p sp-reveal sp-reveal--up"><?php echo wp_kses_post( kasane_venue_t( 'day_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="kv-times sp-stagger"><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">11:00</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't1' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">13:00</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't2' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">14:00</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't3' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">15:00</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't4' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">18:30</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't5' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">21:00</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't6' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">23:30</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't7' ) ); ?></span></div><div class="kv-time sp-reveal sp-reveal--up"><span class="kv-time__t">00:30</span><span class="kv-time__x"><?php echo wp_kses_post( kasane_venue_t( 't8' ) ); ?></span></div></div>
<!-- /wp:html -->
<!-- wp:html -->
<p class="kv-more"><a href="/the-day/"><?php echo wp_kses_post( kasane_venue_t( 'day_link' ) ); ?> <svg class="kv-arrow" viewBox="0 0 24 8" width="24" height="8" aria-hidden="true"><path d="M0 4h23M19 .5 23 4l-4 3.500" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
