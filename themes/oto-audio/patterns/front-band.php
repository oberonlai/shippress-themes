<?php
/**
 * Title: Home: parallax band
 * Slug: oto-audio/front-band
 * Categories: oto-audio
 * Keywords: hi-fi, headphones, audio
 * Viewport Width: 1440
 * Description: Full-bleed listening room photograph in a 480 px frame with parallax.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oa-bandwrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oa-bandwrap"><!-- wp:group {"className":"oa-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group oa-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"oa-band__layer sp-parallax__layer"} -->
<figure class="wp-block-image size-full oa-band__layer sp-parallax__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/s3.webp' ) ); ?>" alt="<?php echo esc_attr( oto_audio_t( 'a5df5f1bc' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"oa-band__chip"} -->
<p class="oa-band__chip"><?php echo wp_kses_post( oto_audio_t( 'k8b487bd0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
