<?php
/**
 * Title: Home: the stale room
 * Slug: mado-air/front-why
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Problem statement: a label, a subtitle with a hairline rule, three paragraphs and a wide photograph.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"why","className":"ma-sec ma-why","layout":{"type":"default"}} -->
<section id="why" class="wp-block-group alignfull ma-sec ma-why"><!-- wp:group {"className":"ma-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group ma-in"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'ke69ae430' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ma-h2"} -->
<h2 class="wp-block-heading ma-h2"><?php echo wp_kses_post( mado_air_t( 'k4fe0c926' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"ma-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"ma-col880","layout":{"type":"default"}} -->
<div class="wp-block-group ma-col880"><!-- wp:paragraph {"className":"ma-lead"} -->
<p class="ma-lead"><?php echo wp_kses_post( mado_air_t( 'k98ff700e' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'k6e1455a4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'kdb6ff082' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-why__photo sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ma-why__photo sp-reveal"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"16/9","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'stale-room.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a04a746b9' ) ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
