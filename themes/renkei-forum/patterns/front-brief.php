<?php
/**
 * Title: Home: brief with highlight bars
 * Slug: renkei-forum/front-brief
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: Highlight-bar heading on the left, three paragraphs and a photo on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"about","align":"full","className":"rf-sec rf-brief","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull rf-sec rf-brief"><!-- wp:group {"className":"rf-brief__h","layout":{"type":"default"}} -->
<div class="wp-block-group rf-brief__h"><!-- wp:paragraph {"className":"rf-label"} -->
<p class="rf-label"><?php echo wp_kses_post( rf_t( 'k325d4cc5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rf-h2 sp-stagger"} -->
<h2 class="wp-block-heading rf-h2 sp-stagger"><span class="rf-line sp-reveal sp-reveal--wipe"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kc4f3263a' ) ); ?></mark></span><span class="rf-line sp-reveal sp-reveal--wipe"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'k321906ae' ) ); ?></mark></span><span class="rf-line sp-reveal sp-reveal--wipe"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kd35996f5' ) ); ?></mark></span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rf-brief__text","layout":{"type":"default"}} -->
<div class="wp-block-group rf-brief__text"><!-- wp:paragraph {"className":"rf-body"} -->
<p class="rf-body"><?php echo wp_kses_post( rf_t( 'kd3dd1f12' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rf-body"} -->
<p class="rf-body"><?php echo wp_kses_post( rf_t( 'ka8f0be59' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rf-body"} -->
<p class="rf-body"><?php echo wp_kses_post( rf_t( 'kef26403e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rf-brief__img"} -->
<figure class="wp-block-image size-full rf-brief__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/buyer-supplier-table.webp' ) ); ?>" alt="<?php echo esc_attr( rf_t( 'A buyer and a supplier talk at a small table with samples and a notebook.' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
