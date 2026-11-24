<?php
/**
 * Title: Home: showroom band
 * Slug: yuka-tiles/front-band
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the showroom with a scrim caption plate and two outline boxes.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"showroom","align":"full","className":"yt-band sp-parallax","layout":{"type":"default"}} -->
<section id="showroom" class="wp-block-group alignfull yt-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-band__img"} -->
<figure class="wp-block-image size-full yt-band__img"><img src="<?php echo yuka_tiles_img( 'showroom-band.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate yt-plate--band","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate yt-plate--band">
<!-- wp:heading {"level":2,"className":"yt-plate__t"} -->
<h2 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'band_t' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'band_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/visit/#appointments"><?php echo esc_html( yuka_tiles_t( 'btn_appt' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( yuka_tiles_t( 'btn_plan' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
