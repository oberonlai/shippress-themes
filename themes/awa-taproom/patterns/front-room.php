<?php
/**
 * Title: Home: the room takes over
 * Slug: awa-taproom/front-room
 * Categories: awa-taproom
 * Keywords: brewery, taproom, pub
 * Viewport Width: 1440
 * Description: Full-bleed photo of the taproom at six that wipes open, with an underlined lead bottom-left.
 */
?>
<!-- wp:group {"className":"awa-room sp-reveal sp-reveal--wipe","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull awa-room sp-reveal sp-reveal--wipe">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/r3-room.webp' ) ); ?>","alt":"Warm taproom at dusk with patrons seated at wooden tables and along the bar.","dimRatio":0,"overlayColor":"umber","isUserOverlayColor":true,"align":"full","className":"awa-room__cover","contentPosition":"bottom left"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left awa-room__cover"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( awa_taproom_t( 'abafd20ba' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/r3-room.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-umber-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":2,"className":"awa-lead awa-lead--room"} -->
<h2 class="wp-block-heading awa-lead awa-lead--room"><?php echo wp_kses_post( awa_taproom_t( 'k09c58074' ) ); ?> <u><?php echo wp_kses_post( awa_taproom_t( 'ka42aea7a' ) ); ?></u><?php echo wp_kses_post( awa_taproom_t( 'kb7290b41' ) ); ?> <u><?php echo wp_kses_post( awa_taproom_t( 'k2aeab627' ) ); ?></u><?php echo wp_kses_post( awa_taproom_t( 'k272c1ab1' ) ); ?> <u><?php echo wp_kses_post( awa_taproom_t( 'k69b3ca78' ) ); ?></u>.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"awa-room__body"} -->
<p class="awa-room__body"><?php echo wp_kses_post( awa_taproom_t( 'k654187b6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"awa-room__tag"} -->
<p class="awa-room__tag"><?php echo wp_kses_post( awa_taproom_t( 'k65f230de' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
