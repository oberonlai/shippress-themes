<?php
/**
 * Title: Header: wordmark band, framed nav and hanging slab
 * Slug: hako-capsule/header-main
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: A 62px wordmark band over a 1px-framed sticky nav bar with a small mark, and an ink slab hanging from the right end with the one Book tonight link.
 */
?>
<!-- wp:group {"className":"hk-band","layout":{"type":"default"}} -->
<div class="wp-block-group hk-band"><!-- wp:paragraph {"className":"hk-band__note"} -->
<p class="hk-band__note"><?php echo esc_html( hako_capsule_t( 'band_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-wordmark"} -->
<p class="hk-wordmark"><a href="<?php echo hako_capsule_url( '/' ); ?>"><?php echo esc_html( hako_capsule_t( 'wm_name' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hk-bar"><!-- wp:paragraph {"className":"hk-mark"} -->
<p class="hk-mark"><a href="<?php echo hako_capsule_url( '/' ); ?>"><?php echo esc_html( hako_capsule_t( 'wm_mark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"always","className":"hk-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"hk-slab","layout":{"type":"default"}} -->
<div class="wp-block-group hk-slab"><!-- wp:html -->
<?php echo hako_capsule_icon( 'pod' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hk-slab__label"} -->
<p class="hk-slab__label"><a href="<?php echo hako_capsule_url( '/book/' ); ?>" aria-label="<?php echo hako_capsule_a( 'slab_aria' ); ?>"><?php echo esc_html( hako_capsule_t( 'slab_book' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-slab__pill"} -->
<p class="hk-slab__pill"><?php echo esc_html( hako_capsule_t( 'slab_from' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
