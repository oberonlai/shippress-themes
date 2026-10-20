<?php
/**
 * Title: First-time buyers: two clients in their words
 * Slug: kasumi-mortgage/buyers-stories
 * Categories: kasumi-mortgage
 * Keywords: stories, quotes
 * Viewport Width: 1440
 * Description: Two client quotes beside a photograph of a self-employed buyer at her bench.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-band"><!-- wp:group {"align":"wide","className":"km-split km-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split km-split--top"><!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( kasumi_mortgage_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--tall"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/self-employed.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
