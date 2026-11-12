<?php
/**
 * Title: Home: framed band (parallax)
 * Slug: gaku-frames/front-band
 * Categories: gaku-frames
 * Keywords: parallax, band, workshop, photo
 * Viewport Width: 1440
 * Description: A full-width walnut frame holding one wide workshop photograph that drifts behind the mount, with a still centred label.
 */
?>
<!-- wp:group {"align":"full","className":"gk-sec gk-bandsec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-bandsec"><!-- wp:group {"className":"gk-frame gk-frame--lg gk-bandframe","layout":{"type":"default"}} -->
<div class="wp-block-group gk-frame gk-frame--lg gk-bandframe"><!-- wp:group {"className":"gk-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group gk-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-bench-wide.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'a7d5a0640' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-seam-label gk-seam-label--band","layout":{"type":"default"}} -->
<div class="wp-block-group gk-seam-label gk-seam-label--band"><!-- wp:paragraph {"className":"gk-seam-label__p"} -->
<p class="gk-seam-label__p"><a href="/mounting/"><?php echo wp_kses_post( gaku_frames_t( 'k784267d6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
