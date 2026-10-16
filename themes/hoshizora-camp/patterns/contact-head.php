<?php
/**
 * Title: Book & find us: page head
 * Slug: hoshizora-camp/contact-head
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The dove-grey page head of Book & find us.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-pagehead"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hz-pagehead__title"} -->
<h1 class="wp-block-heading hz-pagehead__title"><?php echo esc_html( hoshizora_camp_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-pagehead__lead"} -->
<p class="hz-pagehead__lead"><?php echo esc_html( hoshizora_camp_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
