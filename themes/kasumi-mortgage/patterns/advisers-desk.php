<?php
/**
 * Title: Advisers: the round table
 * Slug: kasumi-mortgage/advisers-desk
 * Categories: kasumi-mortgage
 * Keywords: booking, office
 * Viewport Width: 1440
 * Description: The walk-in table by the shop window with opening times, beside a photograph of the office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-band km-band--slate km-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-band km-band--slate km-section--last-band"><!-- wp:group {"align":"wide","className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--land"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-interior.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
