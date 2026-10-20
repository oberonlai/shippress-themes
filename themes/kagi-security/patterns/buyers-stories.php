<?php
/**
 * Title: Getting started: two client stories
 * Slug: kagi-security/buyers-stories
 * Categories: kagi-security
 * Keywords: getting started, clients, stories
 * Viewport Width: 1440
 * Description: Two anonymised client stories, beside a photograph of a training session.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-band"><!-- wp:group {"align":"wide","className":"ks-split ks-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split ks-split--top"><!-- wp:group {"className":"ks-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( kagi_security_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( kagi_security_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ks-split__photo ks-split__photo--tall"} -->
<figure class="wp-block-image size-large ks-split__photo ks-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop-training.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
