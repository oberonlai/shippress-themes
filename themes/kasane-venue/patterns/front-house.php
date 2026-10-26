<?php
/**
 * Title: Home: the house
 * Slug: kasane-venue/front-house
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-house","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-house">
<!-- wp:group {"className":"kv-house__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-house__in">
<!-- wp:heading {"className":"kv-h2 kv-house__label"} -->
<h2 class="wp-block-heading kv-h2 kv-house__label"><?php echo wp_kses_post( kasane_venue_t( 'house_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"kv-house__mid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-house__mid sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kv-house__lead"} -->
<p class="kv-house__lead"><?php echo wp_kses_post( kasane_venue_t( 'house_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kv-body"} -->
<p class="kv-body"><?php echo wp_kses_post( kasane_venue_t( 'house_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kv-body"} -->
<p class="kv-body"><?php echo wp_kses_post( kasane_venue_t( 'house_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="kv-more kv-more--right"><a href="/the-building/"><?php echo wp_kses_post( kasane_venue_t( 'house_link' ) ); ?> <svg class="kv-arrow" viewBox="0 0 24 8" width="24" height="8" aria-hidden="true"><path d="M0 4h23M19 .5 23 4l-4 3.500" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
