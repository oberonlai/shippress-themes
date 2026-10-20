<?php
/**
 * Title: Industries: two customers in their words
 * Slug: hagane-machinery/buyers-stories
 * Categories: hagane-machinery
 * Keywords: stories, quotes
 * Viewport Width: 1440
 * Description: Two customer quotes beside a photograph of a tray of finished parts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-band"><!-- wp:group {"align":"wide","className":"hm-split hm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split hm-split--top"><!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hagane_machinery_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hagane_machinery_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--tall"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/parts-tray.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
