<?php
/**
 * Title: Home: request a quotation
 * Slug: hagane-machinery/front-close
 * Categories: hagane-machinery
 * Keywords: home, machinery
 * Viewport Width: 1440
 * Description: A wide photograph of the training room with the heading, a paragraph and two links beside it.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-fp hm-close","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-fp hm-close"><!-- wp:group {"className":"hm-fp__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-fp__in"><!-- wp:group {"className":"hm-close__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-close__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-close__photo"} -->
<figure class="wp-block-image size-large hm-close__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/training-room.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'front_close_01' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"hm-close__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hm-close__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'front_close_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hagane_machinery_t( 'front_close_03' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'front_close_04' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hagane_machinery_t( 'front_close_05' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hagane_machinery_t( 'front_close_06' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
