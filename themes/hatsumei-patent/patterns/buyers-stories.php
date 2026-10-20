<?php
/**
 * Title: First meeting: two client stories
 * Slug: hatsumei-patent/buyers-stories
 * Categories: hatsumei-patent
 * Keywords: first meeting, clients, stories
 * Viewport Width: 1440
 * Description: Two anonymised client stories, beside a photograph of a trademark certificate.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-section hp-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-section hp-band"><!-- wp:group {"align":"wide","className":"hp-split hp-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-split hp-split--top"><!-- wp:group {"className":"hp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hatsumei_patent_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hatsumei_patent_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hatsumei_patent_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hp-split__photo hp-split__photo--tall"} -->
<figure class="wp-block-image size-large hp-split__photo hp-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/trademark.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
