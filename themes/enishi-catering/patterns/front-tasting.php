<?php
/**
 * Title: Home: the tasting split
 * Slug: enishi-catering/front-tasting
 * Categories: enishi-catering
 * Description: Wide photograph bleeding off the left edge beside the tasting text.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"enc-sec enc-tasting","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull enc-sec enc-tasting"><!-- wp:group {"className":"enc-tasting__grid","layout":{"type":"default"}} -->
<div class="wp-block-group enc-tasting__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"enc-tasting__img"} -->
<figure class="wp-block-image size-full enc-tasting__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tasting-session.webp' ) ); ?>" alt="<?php echo esc_attr( enishi_catering_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"enc-tasting__text","layout":{"type":"default"}} -->
<div class="wp-block-group enc-tasting__text"><!-- wp:heading {"level":2,"className":"enc-section-h enc-section-h--sm enc-left sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading enc-section-h enc-section-h--sm enc-left sp-reveal sp-reveal--down"><?php echo esc_html( enishi_catering_t( 'ta_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( enishi_catering_t( 'ta_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( enishi_catering_t( 'ta_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"enc-caption"} -->
<p class="enc-caption"><?php echo esc_html( enishi_catering_t( 'ta_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
