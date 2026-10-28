<?php
/**
 * Title: Home: specified in your room (mirrored room box)
 * Slug: hikari-lighting/front-specify
 * Categories: hikari-lighting
 * Description: Mirrored dark room box: window at the right, vertical word at the right edge, three prose paragraphs on how a fitting is specified.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/demo/hl-05-planner.webp' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-roombox hl-roombox--mirror","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-roombox hl-roombox--mirror"><!-- wp:html -->
<?php echo hikari_lighting_wordmark( 'hl-roombox__word' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hl-window sp-parallax"} -->
<figure class="wp-block-image size-large hl-window sp-parallax"><img src="<?php echo $img; ?>" alt="<?php echo esc_attr( hikari_lighting_t( 'adb4d839b' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-roombox__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__text"><!-- wp:group {"className":"hl-roombox__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__head"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label"><?php echo wp_kses_post( hikari_lighting_t( 'kfeb9317a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2"><?php echo wp_kses_post( hikari_lighting_t( 'ke7031850' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-roombox__body","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__body"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'k1c619c07' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'kfe1645b7' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hikari_lighting_t( 'kfe37c0d4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hl-mono hl-arrow"} -->
<p class="hl-mono hl-arrow"><a href="/fitting/"><?php echo wp_kses_post( hikari_lighting_t( 'k101cddd4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
