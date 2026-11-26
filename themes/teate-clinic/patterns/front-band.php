<?php
/**
 * Title: Home: the room, parallax band
 * Slug: teate-clinic/front-band
 * Categories: teate-clinic
 * Viewport Width: 1440
 * Description: Full-width photograph of the empty treatment room that moves slowly under a white quote card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-band sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-band__img"} -->
<figure class="wp-block-image size-full tc-band__img"><img src="<?php echo teate_clinic_img( 'band-room.webp' ); ?>" alt="<?php echo teate_clinic_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-band__in">
<!-- wp:group {"className":"tc-bandcard","layout":{"type":"default"}} -->
<div class="wp-block-group tc-bandcard">
<!-- wp:paragraph {"className":"tc-bandcard__q"} -->
<p class="tc-bandcard__q"><?php echo esc_html( teate_clinic_t( 'band_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-bandcard__p"} -->
<p class="tc-bandcard__p"><?php echo esc_html( teate_clinic_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
