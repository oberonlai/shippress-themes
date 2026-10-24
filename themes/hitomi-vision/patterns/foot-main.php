<?php
/**
 * Title: Footer
 * Slug: hitomi-vision/foot-main
 * Categories: hitomi-vision
 * Inserter: no
 * Description: Wordmark and tagline, the address, the hours and the page links on a slightly darker sage ground.
 */
?>
<!-- wp:group {"align":"full","className":"hv-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hv-foot"><!-- wp:group {"className":"hv-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hv-foot__grid"><!-- wp:group {"className":"hv-foot__col hv-foot__col--name","layout":{"type":"default"}} -->
<div class="wp-block-group hv-foot__col hv-foot__col--name"><!-- wp:site-title {"level":0,"className":"hv-brand"} /-->

<!-- wp:paragraph {"className":"hv-foot__tag"} -->
<p class="hv-foot__tag"><?php echo esc_html( hitomi_vision_t( 'tagline' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hv-foot__col"><!-- wp:paragraph {"className":"hv-foot__label"} -->
<p class="hv-foot__label"><?php echo esc_html( hitomi_vision_t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'foot_address' ) ); ?><br><?php echo hitomi_vision_lines( 'foot_contact' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hv-foot__col"><!-- wp:paragraph {"className":"hv-foot__label"} -->
<p class="hv-foot__label"><?php echo esc_html( hitomi_vision_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'foot_h1' ) ); ?><br><?php echo esc_html( hitomi_vision_t( 'foot_h2' ) ); ?><br><?php echo esc_html( hitomi_vision_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hv-foot__col"><!-- wp:paragraph {"className":"hv-foot__label"} -->
<p class="hv-foot__label"><?php echo esc_html( hitomi_vision_t( 'foot_pages' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","className":"hv-foot__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hv-foot__legal"} -->
<p class="hv-foot__legal"><?php echo esc_html( hitomi_vision_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
