<?php
/**
 * Title: Home: statement
 * Slug: noka-cheese/front-statement
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Sticky pebble photograph beside three narrative paragraphs that rise line by line.
 */
?>
<!-- wp:group {"className":"nk-sec nk-statement","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-statement"><!-- wp:group {"className":"nk-row nk-row--statement","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--statement"><!-- wp:group {"className":"nk-cell nk-cell--photo nk-sticky","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--photo nk-sticky"><!-- wp:group {"className":"nk-photo-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nk-photo-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nk-pebble nk-pebble--b"} -->
<figure class="wp-block-image size-full nk-pebble nk-pebble--b"><img src="<?php echo noka_cheese_img( 'statement-wrap.webp' ); ?>" alt="<?php echo esc_attr( noka_cheese_t( 'alt_statement' ) ); ?>" width="1024" height="1024"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nk-cell nk-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--text"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'st_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'st_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nk-lines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-lines sp-stagger"><!-- wp:paragraph {"className":"nk-body sp-reveal sp-reveal--up"} -->
<p class="nk-body sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'st_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body sp-reveal sp-reveal--up"} -->
<p class="nk-body sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'st_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nk-body sp-reveal sp-reveal--up"} -->
<p class="nk-body sp-reveal sp-reveal--up"><?php echo wp_kses_post( noka_cheese_t( 'st_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"nk-pills"} -->
<div class="wp-block-buttons nk-pills"><!-- wp:button {"className":"nk-pill nk-pill--full"} -->
<div class="wp-block-button nk-pill nk-pill--full"><a class="wp-block-button__link wp-element-button" href="/how-we-cut/"><?php echo wp_kses_post( noka_cheese_t( 'st_link' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
