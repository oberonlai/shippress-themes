<?php
/**
 * Title: Home: on the floor (room box)
 * Slug: hikari-lighting/front-floor
 * Categories: hikari-lighting
 * Description: Dark perspective room box with one lit photo window and a vertical stencil word.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/demo/hl-02-floor.webp' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-roombox","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-roombox"><!-- wp:html -->
<?php echo hikari_lighting_wordmark( 'hl-roombox__word' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hl-window sp-parallax"} -->
<figure class="wp-block-image size-large hl-window sp-parallax"><img src="<?php echo $img; ?>" alt="<?php echo esc_attr( hikari_lighting_t( 'aac5074fb' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-roombox__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__text"><!-- wp:group {"className":"hl-roombox__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__head"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'k6a225992' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2"><?php echo wp_kses_post( hikari_lighting_t( 'kc3173f17' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-roombox__body","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'kb9be1e6e' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'k669358bb' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hl-mono hl-arrow"} -->
<p class="hl-mono hl-arrow"><a href="/lamps/"><?php echo wp_kses_post( hikari_lighting_t( 'kd0eda7b3' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
