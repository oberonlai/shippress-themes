<?php
/**
 * Title: Home: the room on a Saturday
 * Slug: yubi-college/front-room
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Full-bleed parallax photo band with an overhanging white caption panel docked at its foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"room","className":"yb-room sp-parallax","layout":{"type":"default"}} -->
<section id="room" class="wp-block-group alignfull yb-room sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-room__img"} -->
<figure class="wp-block-image size-full yb-room__img"><img src="<?php echo yubi_college_img( 'p15-saturday-room-wide.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yb-room__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-room__in"><!-- wp:group {"className":"yb-room__panel","layout":{"type":"default"}} -->
<div class="wp-block-group yb-room__panel"><!-- wp:paragraph {"className":"yb-room__l"} -->
<p class="yb-room__l"><?php echo esc_html( yubi_college_t( 'room_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-room__p"} -->
<p class="yb-room__p"><?php echo esc_html( yubi_college_t( 'room_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
