<?php
/**
 * Title: Engineers: the inspection room
 * Slug: hagane-machinery/advisers-desk
 * Categories: hagane-machinery
 * Keywords: inspection, visit
 * Viewport Width: 1440
 * Description: The inspection room, held at 20 degrees, with visiting hours, beside a photograph of it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-band hm-band--slate hm-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-band hm-band--slate hm-section--last-band"><!-- wp:group {"align":"wide","className":"hm-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--land"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/inspection-room.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-split__title"} -->
<h2 class="wp-block-heading hm-split__title"><?php echo wp_kses_post( hagane_machinery_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
