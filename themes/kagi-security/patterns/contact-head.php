<?php
/**
 * Title: Contact: get in touch
 * Slug: kagi-security/contact-head
 * Categories: kagi-security
 * Keywords: contact
 * Viewport Width: 1440
 * Description: The Contact page opening: title and lead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-head"><!-- wp:group {"align":"wide","className":"ks-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-head__grid"><!-- wp:group {"className":"ks-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'contact_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-head__title"} -->
<h1 class="wp-block-heading ks-head__title"><?php echo wp_kses_post( kagi_security_t( 'contact_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kagi_security_t( 'contact_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
