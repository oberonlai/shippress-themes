<?php
/**
 * Title: Getting started: page head
 * Slug: kagi-security/buyers-head
 * Categories: kagi-security
 * Keywords: getting started, onboarding
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of a client visit.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head ks-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head ks-head--photo"><!-- wp:group {"align":"wide","className":"ks-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-head__grid"><!-- wp:group {"className":"ks-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title"><?php echo wp_kses_post( kagi_security_t( 'buyers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kagi_security_t( 'buyers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide ks-head__photo"} -->
<figure class="wp-block-image size-large alignwide ks-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/client-visit.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'buyers_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( kagi_security_t( 'buyers_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
