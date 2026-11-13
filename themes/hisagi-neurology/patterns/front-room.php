<?php
/**
 * Title: Home: one room, one hour
 * Slug: hisagi-neurology/front-room
 * Categories: hisagi-neurology
 * Viewport Width: 1440
 * Description: Full-bleed high-key consulting room photograph with a slow parallax drift and a white card.
 */
?>
<!-- wp:cover {"url":"<?php echo hisagi_neurology_img( 'room.webp' ); ?>","dimRatio":0,"minHeight":720,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"align":"full","className":"hn-room sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-left hn-room sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hisagi_neurology_t( 'ad617dda8' ) ); ?>" src="<?php echo hisagi_neurology_img( 'room.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"hn-room__card","layout":{"type":"default"}} -->
<div class="wp-block-group hn-room__card"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'k9896300c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h2"} -->
<h2 class="wp-block-heading hn-h2"><?php echo wp_kses_post( hisagi_neurology_t( 'kbd144156' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'k0b652458' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
