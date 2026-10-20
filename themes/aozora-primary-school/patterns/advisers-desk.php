<?php
/**
 * Title: Teachers: who to ask
 * Slug: aozora-primary-school/advisers-desk
 * Categories: aozora-primary-school
 * Keywords: teachers, office
 * Viewport Width: 1440
 * Description: Who to ask about what, with office hours, beside a photograph of the school corridor.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-section ap-band ap-band--slate ap-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-section ap-band ap-band--slate ap-section--last-band"><!-- wp:group {"align":"wide","className":"ap-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-split__photo ap-split__photo--land"} -->
<figure class="wp-block-image size-large ap-split__photo ap-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/corridor.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ap-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ap-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ap-split__title"} -->
<h2 class="wp-block-heading ap-split__title"><?php echo wp_kses_post( aozora_primary_school_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
