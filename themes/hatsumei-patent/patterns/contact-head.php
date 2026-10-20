<?php
/**
 * Title: Contact: get in touch
 * Slug: hatsumei-patent/contact-head
 * Categories: hatsumei-patent
 * Keywords: contact
 * Viewport Width: 1440
 * Description: The Contact page opening: title and lead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-head"><!-- wp:group {"align":"wide","className":"hp-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-head__grid"><!-- wp:group {"className":"hp-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hp-head__title"} -->
<h1 class="wp-block-heading hp-head__title"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hatsumei_patent_t( 'contact_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
