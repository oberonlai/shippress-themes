<?php
/**
 * Title: Home: full-width photograph with parallax
 * Slug: kosame-hotpot/band
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: A full-width low-key photograph drifting slowly behind a bottom-left statement.
 */
?>
<!-- wp:group {"anchor":"pause","tagName":"section","className":"ks-band sp-parallax","layout":{"type":"default"},"align":"full"} -->
<section id="pause" class="wp-block-group alignfull ks-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-band__photo"} -->
<figure class="wp-block-image size-full ks-band__photo"><img src="<?php echo kosame_hotpot_img( 'dining-room-service.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-band__shade" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"ks-band__statement"} -->
<h2 class="wp-block-heading ks-band__statement"><?php echo esc_html( kosame_hotpot_t( 'band_line' ) ); ?></h2>
<!-- /wp:heading --></section>
<!-- /wp:group -->
