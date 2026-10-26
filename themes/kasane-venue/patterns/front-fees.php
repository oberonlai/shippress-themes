<?php
/**
 * Title: Home: fees and dates
 * Slug: kasane-venue/front-fees
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-fees-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-fees-sec">
<!-- wp:group {"className":"kv-fees-sec__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-fees-sec__in">
<!-- wp:heading {"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo wp_kses_post( kasane_venue_t( 'fees_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="kv-fees"><li><span class="kv-fees__n"><?php echo wp_kses_post( kasane_venue_t( 'f1' ) ); ?></span><span class="kv-fees__note"><?php echo wp_kses_post( kasane_venue_t( 'f1n' ) ); ?></span><span class="kv-fees__p">€11,500</span></li><li><span class="kv-fees__n"><?php echo wp_kses_post( kasane_venue_t( 'f2' ) ); ?></span><span class="kv-fees__note"><?php echo wp_kses_post( kasane_venue_t( 'f2n' ) ); ?></span><span class="kv-fees__p">€8,900</span></li><li><span class="kv-fees__n"><?php echo wp_kses_post( kasane_venue_t( 'f3' ) ); ?></span><span class="kv-fees__note"><?php echo wp_kses_post( kasane_venue_t( 'f3n' ) ); ?></span><span class="kv-fees__p">€6,800</span></li><li><span class="kv-fees__n"><?php echo wp_kses_post( kasane_venue_t( 'f4' ) ); ?></span><span class="kv-fees__note"><?php echo wp_kses_post( kasane_venue_t( 'f4n' ) ); ?></span><span class="kv-fees__p">€5,200</span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kv-body kv-fees-sec__note"} -->
<p class="kv-body kv-fees-sec__note"><?php echo wp_kses_post( kasane_venue_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="kv-more"><a href="/fees/"><?php echo wp_kses_post( kasane_venue_t( 'fees_link' ) ); ?> <svg class="kv-arrow" viewBox="0 0 24 8" width="24" height="8" aria-hidden="true"><path d="M0 4h23M19 .5 23 4l-4 3.500" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
