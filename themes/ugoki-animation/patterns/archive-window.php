<?php
/**
 * Title: Archive: window
 * Slug: ugoki-animation/archive-window
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: Page window of an archive (category, tag, date) with the parallax photograph and HUD.
 */
?>
<!-- wp:group {"tagName":"section","className":"ug-hero ug-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group ug-hero ug-hero--page"><!-- wp:group {"className":"ug-window ug-window--page","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window ug-window--page"><!-- wp:group {"className":"ug-window__text","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window__text"><!-- wp:paragraph {"className":"ug-window__kick"} -->
<p class="ug-window__kick"><?php echo esc_html( ugoki_animation_t( 'ar_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"ug-h1 ug-h1--page"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-window__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-window__img"} -->
<figure class="wp-block-image size-full ug-window__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-light-tables.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ug-window__shade" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-hud","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud"><!-- wp:group {"className":"ug-hud__l","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud__l"><!-- wp:html -->
<span class="ug-dot" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ugoki_animation_t( 'ar_hud' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ug-hud__c"} -->
<p class="ug-hud__c"><?php echo esc_html( ugoki_animation_t( 'ar_hud2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ug-hud__r"><svg class="ug-ticks" width="120" height="12" viewBox="0 0 120 12" fill="currentColor" aria-hidden="true" focusable="false"><rect x="0" y="0" width="1" height="12"/><rect x="5" y="0" width="1" height="8"/><rect x="10" y="0" width="1" height="8"/><rect x="15" y="0" width="1" height="8"/><rect x="20" y="0" width="1" height="8"/><rect x="25" y="0" width="1" height="8"/><rect x="30" y="0" width="1" height="12"/><rect x="35" y="0" width="1" height="8"/><rect x="40" y="0" width="1" height="8"/><rect x="45" y="0" width="1" height="8"/><rect x="50" y="0" width="1" height="8"/><rect x="55" y="0" width="1" height="8"/><rect x="60" y="0" width="1" height="12"/><rect x="65" y="0" width="1" height="8"/><rect x="70" y="0" width="1" height="8"/><rect x="75" y="0" width="1" height="8"/><rect x="80" y="0" width="1" height="8"/><rect x="85" y="0" width="1" height="8"/><rect x="90" y="0" width="1" height="12"/><rect x="95" y="0" width="1" height="8"/><rect x="100" y="0" width="1" height="8"/><rect x="105" y="0" width="1" height="8"/><rect x="110" y="0" width="1" height="8"/><rect x="115" y="0" width="1" height="8"/></svg> <span class="ug-hud__of"><?php echo esc_html( ugoki_animation_t( 'ar_no' ) ); ?></span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
