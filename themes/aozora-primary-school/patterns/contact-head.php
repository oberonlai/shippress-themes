<?php
/**
 * Title: Contact: get in touch
 * Slug: aozora-primary-school/contact-head
 * Categories: aozora-primary-school
 * Keywords: contact
 * Viewport Width: 1440
 * Description: The Contact page opening: title and lead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-head"><!-- wp:group {"align":"wide","className":"ap-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-head__grid"><!-- wp:group {"className":"ap-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ap-head__title"} -->
<h1 class="wp-block-heading ap-head__title"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( aozora_primary_school_t( 'contact_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
