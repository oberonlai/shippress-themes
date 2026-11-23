<?php
/**
 * Title: Home: walking the floor
 * Slug: zaseki-panel/front-floor
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Label rail, the headline with three narrative paragraphs and a portrait photograph.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"floor","className":"zp-sec zp-floor","layout":{"type":"default"}} -->
<section id="floor" class="wp-block-group zp-sec zp-floor">
<!-- wp:group {"className":"zp-wrap zp-floor__in","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-floor__in">
<!-- wp:group {"className":"zp-rail","layout":{"type":"default"}} -->
<div class="wp-block-group zp-rail">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'floor_label' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-floor__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-floor__text">
<!-- wp:heading {"level":2,"className":"zp-h2"} -->
<h2 class="wp-block-heading zp-h2"><?php echo esc_html( zaseki_panel_t( 'floor_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'floor_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'floor_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'floor_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-floor__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-floor__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'floor-walk.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_f1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
