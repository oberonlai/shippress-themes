<?php
/**
 * Title: Home: waiting room band with a thin line
 * Slug: hada-dermatology/front-standard-band
 * Categories: hada-dermatology
 * Keywords: home
 * Viewport Width: 1440
 * Description: Wide waiting-room photograph on a band with a thin Latin line crossing its lower-left edge and two short paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-visit","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-visit">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hd-visit__photo"} -->
<figure class="wp-block-image size-large hd-visit__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-waiting.webp' ) ); ?>" alt="<?php echo esc_attr( hada_dermatology_t( 'kc32dcbec' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"hd-standard hd-standard--echo"} -->
<p class="hd-standard hd-standard--echo"><?php echo wp_kses_post( hada_dermatology_t( 'k43d9f3ca' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hd-visit__text","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-visit__text">
<!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label"><?php echo wp_kses_post( hada_dermatology_t( 'ke4136fbf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hada_dermatology_t( 'ke26bc06d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hada_dermatology_t( 'k68752a77' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hada_dermatology_t( 'k44d2e048' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
