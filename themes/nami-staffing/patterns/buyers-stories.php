<?php
/**
 * Title: For job seekers: two candidate stories
 * Slug: nami-staffing/buyers-stories
 * Categories: nami-staffing
 * Keywords: job seekers, stories
 * Viewport Width: 1440
 * Description: Two anonymised candidate stories, beside a photograph of an induction.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-section ns-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-section ns-band"><!-- wp:group {"align":"wide","className":"ns-split ns-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-split ns-split--top"><!-- wp:group {"className":"ns-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ns-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( nami_staffing_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( nami_staffing_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ns-split__photo ns-split__photo--tall"} -->
<figure class="wp-block-image size-large ns-split__photo ns-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/induction.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
