<?php
/**
 * Title: Footer: wordmark, address and links
 * Slug: kasane-venue/footer-main
 * Categories: kasane-venue
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"kv-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kv-foot"><!-- wp:group {"className":"kv-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__in"><!-- wp:paragraph {"className":"kv-foot__mark"} -->
<p class="kv-foot__mark"><?php echo wp_kses_post( kasane_venue_t( 'foot_mark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kv-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__cols"><!-- wp:group {"className":"kv-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kv-foot__col"><!-- wp:paragraph {"className":"kv-small"} -->
<p class="kv-small"><?php echo wp_kses_post( kasane_venue_t( 'foot_address' ) ); ?><br><?php echo wp_kses_post( kasane_venue_t( 'foot_office' ) ); ?><br><?php echo wp_kses_post( kasane_venue_t( 'foot_viewings' ) ); ?><br><?php echo wp_kses_post( kasane_venue_t( 'foot_email' ) ); ?> <a href="mailto:hello@kasanevenue.example">hello@kasanevenue.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"kv-foot__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kv-foot__legal"} -->
<p class="kv-foot__legal"><?php echo wp_kses_post( kasane_venue_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
