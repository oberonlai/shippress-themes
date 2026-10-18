<?php
/**
 * Title: Home: one wide site photograph
 * Slug: kizuki-construction/site-photo
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: One wide documentary photograph of a building under construction, with a caption.
 */
?>
<!-- wp:group {"tagName":"section","className":"kz-shot","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-shot"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-shot__img"} -->
<figure class="wp-block-image size-full kz-shot__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_site' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kz-shot__cap"} -->
<p class="kz-shot__cap"><?php echo esc_html( kizuki_construction_t( 'sp_cap' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
