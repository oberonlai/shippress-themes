<?php
/**
 * Title: Home: parallax band with quote plate
 * Slug: senbatsu-partners/front-band
 * Categories: senbatsu-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo senbatsu_partners_img( 'corridor.webp' ); ?>","alt":"Two figures walk through a sunlit office hallway lined with glass conference rooms.","dimRatio":10,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":520,"contentPosition":"bottom left","align":"full","className":"sb-bandphoto sp-parallax","tagName":"section"} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left sb-bandphoto sp-parallax" style="min-height:520px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( senbatsu_partners_t( 'a2e9dd257' ) ); ?>" src="<?php echo senbatsu_partners_img( 'corridor.webp' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"sb-plate"} -->
<div class="wp-block-group sb-plate">
<!-- wp:paragraph {"className":"sb-plate__q"} -->
<p class="sb-plate__q"><?php echo wp_kses_post( senbatsu_partners_t( 'k89728a4e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-plate__cap"} -->
<p class="sb-plate__cap"><?php echo wp_kses_post( senbatsu_partners_t( 'kf57101f5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></section>
<!-- /wp:cover -->
